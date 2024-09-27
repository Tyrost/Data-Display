<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>

    <link rel="stylesheet" href="/frontend/components/data_display.css">
    <link rel="stylesheet" href="/frontend/components/main_page.css">
    <link rel="stylesheet" href="/frontend/components/general.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

</head>

<body>
    
    <div class="top_options_panel">
        <button class="menu" name="main_home_btn" onclick="window.location.href='/index.php';">Home</button>
        <button class="menu" name="main_data_btn" onclick="window.location.href='/frontend/html/data_page.php';">Data</button>
        <button class="menu" name="main_markets_btn" onclick="window.location.href='/frontend/html/markets_page.html';">Markets</button>
        <button class="menu" name="main_countries_btn" onclick="window.location.href='/frontend/html/countries_page.html';">Countries</button>
        <button class="menu" name="main_news_btn" onclick="window.location.href='/frontend/html/news_page.html';">News</button>
    </div>

    <form class="form-container" action="" method="get">
        <div class="autocomplete-container">
            <label for="code-input">Ticker:</label><br><br>
            <input type="text" id="code-input" name="ticker-input" placeholder="Company Ticker" required>
        </div>
    
        <div class="time-span">
            <label for="time-span-select">Time Span:</label>
            <select id="time-span-select" name="time-span" required>
                <option value="day">Day</option>
                <option value="week">Week</option>
                <option value="month">Month</option>
                <option value="year">Year</option>
            </select>
        </div>
    
        <div class="start-date">
            <label for="start-date-input">Start Date:</label><br><br>
            <i id="start-date-icon" class="calendar"></i>
            <input type="date" id="start-date-input" name="start-date" min="1980-01-01" max="2023-01-01">
        </div>
    
        <div class="input-container end-date">
            <label for="end-date-input">End Date:</label><br><br>
            <i id="end-date-icon" class="fa fa-calendar"></i>
            <input type="date" id="end-date-input" name="end-date" min="1980-01-01" max="2023-01-01">
        </div>
    
        <div class="filter-container">
            <button type="submit" class="filter-button">Filter</button>
        </div>
        
    </form>


    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="/backend/JavaScript/autocomplete_ticker.js"></script>


</body>
</html>


<?php 

    require_once '../../backend/php/commander.php';

    $ticker = isset($_GET["ticker-input"]) ? $_GET["ticker-input"]:null;
    $span = isset($_GET["time-span"]) ? $_GET["time-span"] : null ;
    $startDate = isset($_GET["start-date"]) ? $_GET["start-date"]:null;
    $endDate = isset( $_GET["end-date"]) ? $_GET["end-date"]:null;

    if (isset($ticker) && isset($span) && isset($startDate) && isset($endDate)) {
        $api_url = "https://api.polygon.io/v2/aggs/ticker/$ticker/range/1/$span/$startDate/$endDate"; 
        
        $data = executePythonData($api_url);  
    }
?>
