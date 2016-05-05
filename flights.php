<?php

include 'common.php';

printHeader("Search Flights");

?>

    <main class="container search-flights-container blank-container">
        <h1 class="space-below">Search Flights</h1>
        <form action="flight-details.php">
            <div class="form-group space-below">
                <label>From</label>
                <select class="form-control" name="from">
                		<option value="sydney">Sydney</option>
                    	<option value="canberra">Canberra</option>
                    	<option value="newcastle">Newcastle</option>
                    	<option value="brokenhill">Broken Hill</option>
                    	<option value="melbourne">Melbourne</option>
                    	<option value="bendigo">Bendigo</option>
                    	<option value="adelaide">Adelaide</option>
                    	<option value="darwin">Darwin</option>
                    	<option value="alicesprings">Alice Springs</option>
                    	<option value="perth">Perth</option>
                    	<option value="albany">Albany</option>
                    	<option value="kalgoorlie">Kalgoorlie</option>
                    	<option value="broome">Broome</option>
                    	<option value="launceston">Launceston</option>
                    	<option value="hobart">Hobart</option>
                    	<option value="brisbane">Brisbane</option>
                    	<option value="mtisa">Mt Isa</option>
                    	<option value="rockhampton">Rockhampton</option>
							<option value="cairns">Cairns</option>
							<option value="ptaugusta">Pt Augusta</option>
                </select>
            </div>
               
            <div class="form-group space-below">
                <label>To</label>
                <select class="form-control" name="to">
                    <option value="sydney">Sydney</option>
                    	<option value="canberra">Canberra</option>
                    	<option value="newcastle">Newcastle</option>
                    	<option value="brokenhill">Broken Hill</option>
                    	<option value="melbourne">Melbourne</option>
                    	<option value="bendigo">Bendigo</option>
                    	<option value="adelaide">Adelaide</option>
                    	<option value="darwin">Darwin</option>
                    	<option value="alicesprings">Alice Springs</option>
                    	<option value="perth">Perth</option>
                    	<option value="albany">Albany</option>
                    	<option value="kalgoorlie">Kalgoorlie</option>
                    	<option value="broome">Broome</option>
                    	<option value="launceston">Launceston</option>
                    	<option value="hobart">Hobart</option>
                    	<option value="brisbane">Brisbane</option>
                    	<option value="mtisa">Mt Isa</option>
                    	<option value="rockhampton">Rockhampton</option>
							<option value="cairns">Cairns</option>
							<option value="ptaugusta">Pt Augusta</option>
                </select>
            </div>

            <div class="search-flight-btn-container">
                <button type="submit" class="btn btn-default accent-background"><span class="glyphicon glyphicon-chevron-left"></span> New Search</button>
                <button type="submit" class="btn btn-default accent-background">Book Flight <span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
        </form>
    </main>

<?php

printFooter();

?>
