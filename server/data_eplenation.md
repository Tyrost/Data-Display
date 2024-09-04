
# Apple stock market 2018-01-01 to 2024-01-01#
### Yearly Example ###

{
    'adjusted': True,
    'count': 3,
    'queryCount': 671,
    'request_id': '6c27afb41815ffa57072c3a593caae61',
    'results': [
        {'c': 129.93, 'h': 182.94, 'l': 125.87, 'n': 179831740, 'o': 177.83, 't': 1641013200000, 'v': 22054180054.0, 'vw': 154.5151},
        {'c': 192.53, 'h': 199.62, 'l': 124.17, 'n': 147404680, 'o': 130.28, 't': 1672549200000, 'v': 14788471776.0, 'vw': 170.8276},
        {'c': 220.85, 'h': 237.23, 'l': 164.075, 'n': 121564533, 'o': 187.15, 't': 1704085200000, 'v': 10243622439.0, 'vw': 193.8951}
    ],
    'resultsCount': 3,
    'status': 'OK',
    'ticker': 'AAPL'
}

1. `adjusted`

This field indicates whether the data has been adjusted for stock splits, dividends, or other corporate actions.
Indicates the total number of records available from the dataset based on the given query

2. `count` and `queryCount`

count: Represents the number of results returned (in this case, 3 data points)
queryCount: The total number of data points available that match the query (in this case, 671)

3. `results` with (`t`, `o`, `h`, `l`, `c`, `v`, `vw`, `n`)

    `t - timestamp`:
        The time this data point was recorded, in Unix epoch (milliseconds).

    `o - open price`:
        The price at which the stock opened during the specified time period. In other words
        it is how the market perceives the stock’s value at the start of each period.
    
    `h - high price`:
        The highest price the stock reached during the specified period.

    `l - low price`:
        The lowest price the stock traded during the specified period.

    `c - close price`:
        The price at which the stock closed at the end of the specified period.

    `v - volume`:
        The total volume of shares traded during the specified period.

    `vw - volume-weighted average price`:
        The average price the stock traded at during the day, weighted by volume.

    `n - number of trades`
        The total number of individual trades that occurred during the period.

# Apple stock market 2018-01-01 to 2024-01-01#
### Weekly Example ###

{'adjusted': True,
 'count': 70,
 'queryCount': 336,
 'request_id': 'dc7e0be21ee33c043207d75562f834c9',
 'results': [{'c': 157.37,
              'h': 157.82,
              'l': 152.68,
              'n': 2614505,
              'o': 156.47,
              't': 1662264000000,
              'v': 313999120.0,
              'vw': 155.2847},
             {'c': 150.7,
              'h': 164.26,
              'l': 148.37,
              'n': 4127179,
              'o': 159.59,
              't': 1662868800000,
              'v': 566964166.0,
              'vw': 155.0026},
            
            ...

            ]
 
 'resultsCount': 70,
 'status': 'OK',
 'ticker': 'AAPL'}