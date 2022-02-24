<?php


require_once 'dbconfig.php';

try {
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $clerkID = $_POST['clerkID'];
        $constituencyID = $_POST['constituencyID'];
        $pollingdivisionID = $_POST['pollingdivsionID'];
        $pollingstation= $_POST['pollingstation'];
        $votesforcandidate1 = $_POST['votesfrocandidate1'];
        $votesforcandidate2 = $_POST['votesforcandidate2'];
        $rejectedballots = $_POST['rejectedballots'];
        $totalnumberofvotes = $_POST['totalnumberofvotes'];
        $insertdata= "INSERT INTO stationvotes (constituency_id, clerk_id, poll_division_id, polling_station_code, candidate1Votes, candidate1Votes, rejectedVotes, totalVotes)
                    VALUES($constituencyId, $clerkID, $polldivisionID, $pollingstation, $votesforcandidate1, $votesforcandidate2, $rejectedballots, $totalnumberofvotes)";
                    $stmt = $connect->query($insertdata);
                    $stmt = $connect->query("SELECT * FROM stationvotes);
				    $results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
       ?>
       <html
       <head>
       <link rel="stylesheet" type="text/css" media="screen" href="styles/p1b.css">
       </head>
       <body>
       <div>
       <table class="constituency-table">
            <thead>
                    <tr>
                         <th>Constituency</th>
                         <th> Polling Div.</th>
                         <th> Polling Stn</th>
                         <th> Location</th>
                         <th> Candidate1</th>
                         <th> Candidate2</th>
                         <th>Rejected</th>
                         <th>Total</th>

   

   
       
    } catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());

    }
</html>
</body>