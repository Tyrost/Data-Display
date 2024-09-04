import requests
import logging as log
import datetime as dt

# _____________________________________ GLOBAL MARKET DATA REQUEST _____________________________________ #


log.basicConfig(level=log.DEBUG, format="%(asctime)s - %(levelname)s - %(message)s", datefmt="%Y-%m-%d %H:%M:%S")

CHECK_MARK = '\033[32m\u2714\033[0m'
CROSS_MARK = '\033[31m\u2716\033[0m'

def get_api_config(ticker:str, timespan:str, start_date:dt.date, end_date:dt.date):
    timespan_options = ['day', 'week', 'month', 'year']
    BASE_URL = f'https://api.polygon.io/v2/aggs/ticker/{ticker.strip().upper()}/range/1/'
    url_config = ''

    #Check inputs
    if not (timespan in timespan_options):
        log.warning('Time span option not supported.')
        return

    if start_date.year < 1900:
        log.warning(f'Starting year date: {start_date.year} not supported. Must be greater than year 1900.')

    if end_date.year > 2024:
        log.warning(f'End year date: {end_date.year} not supported. Must be less than year 2024.')

    url_config += f'{timespan}/{start_date}/{end_date}'

    request_url = BASE_URL + url_config
    return request_url                       
                        
request_url = get_api_config('aapl', 'week', dt.date(2018, 1, 1), dt.date(2024, 1, 1)) # Must be dynamic with front-end ### FUTURE IMPLEMENTATION ###

API_KEY = 'ysdb0tYtWz0iKhuNeCAz4PL6ei1rFXPa'

response = requests.get(f'{request_url}?apiKey={API_KEY}')

if response.status_code == 200:
    log.info(f'API Call response {response.status_code}. {CHECK_MARK}')
    data = response.json()

else:
    raise ConnectionError(f'Status code {response.status_code}: Connection failed.')

