import pandas as pd
import json
import sys
from datetime import datetime, timedelta

if len(sys.argv) > 1:
    value_passed = sys.argv[1]
    data = value_passed.split(",")
    dates = data[0]
    ticker = data[1]


def is_working_day(daily):
    return daily.weekday() < 5


input_date_str = dates
input_date = datetime.strptime(input_date_str, "%Y-%m-%d")

working_days = []

while len(working_days) < 14:
    input_date -= timedelta(days=1)
    if is_working_day(input_date):
        working_days.append(input_date.strftime("%Y-%m-%d"))

working_days.reverse()

dates = working_days

tradestats = pd.DataFrame()
u = 0
b = []

res = []
result = {}
for date in dates:
    url = f'https://iss.moex.com/iss/datashop/algopack/eq/tradestats/{ticker}.csv?from={date}&till={date}&iss.only=data'
    df = pd.read_csv(url, sep=';', skiprows=2)

    c = df[['pr_high', 'tradetime', 'vol', 'tradedate']]

    b += [c]
    ab = c[c['pr_high'] == c['pr_high'].max()]
    tradedate = ab['tradedate'].to_string(index=False, dtype=False)
    pr_high = ab['pr_high'].to_string(index=False, dtype=False)
    tradetime = ab['tradetime'].to_string(index=False, dtype=False)
    vol = ab['vol'].to_string(index=False, dtype=False)
    res += [tradedate, pr_high, tradetime, vol]

result["l0"] = str(len(res))
for i in range(len(res)):
    result["l" + str(i + 1)] = res[i]

result = json.dumps(result)

print(result)
