@extends('layout')
    <title>FAQ</title>

@section('content')


<ul>
    @foreach($faqs as $faq)
        <li><ul>{{ $faq->question }}</ul></li> <br>
        <p>{{ $faq->answer }}</p
    @endforeach
</ul>

<h1>Create a FAQ</h1>
    <form method="POST" action="/faq">
        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" value="A question"><br>
        <label for="answer">Answer:</label><br>
        <input type="text" id="answer" name="answer" value="An answer"><br><br>
        <input type="submit" value="Submit">
    </form>

@endsection


<!--
<div class="dropdown"> <button class="dropbtn">1. How can you print a document from your laptop at HZ?</button>
    <div class="dropdown-content">
        <a href="#">HZ Printer: Select the printer to print off in either A3 or in A4 format.
            <br>
            Once the print job has been requested you must register using your HZ pass on the TouchID next
            to the multifunctional printer.
            Next, select printer option Print / Afdrukken.
            In the menu, select the multifunctional printer to where the job has been sent.
            Next, you can see which printer job is ready to be printed.
            The print job is the completed provided there is sufficient credit on your printing account.
            When the printing is completed, press Stop on the TouchID, followed by Logout.
            The print job remains available for up to 24 hours.
            It is deleted after this period.
        </a>
    </div> </div>

<br>

<div class="dropdown"> <button class="dropbtn">2. How can you scan a document a send it to your laptop at HZ?</button>
    <div class="dropdown-content">
        <a href="#">
            - Ensure you have at least €0.07 credit on your HZ pass.
            <br>
            - Register using your HZ pass on the TouchID next to the multifunctional printer.
            <br>
            - In the TouchID menu, select option Scanning-Scan.
            <br>
            - Lay the original sheet on the feeder or glass plate.
            <br>
            - Press Scan and Send.
            <br>
            - Press Scan to me.
            <br>
            - Press Yes.
            <br>
            - Press the Start button.
            <br>
            - Once the scan is ready, press Start Sending.
            <br>
            - When scanning is completed, press Stop on the TouchID, followed by Logout.
        </a>
    </div></div>

<br>

<div class="dropdown"> <button class="dropbtn">3.	What do you need to do when you are sick / show symptoms of coronavirus?</button>
    <div class="dropdown-content">
        <a href="#">Do you have symptoms of coronavirus such as a cold, cough and/or fever? Stay at home and report sick.
            If the symptoms get worse, contact your GGD doctor by telephone.</a>
    </div></div>

<br>

<div class="dropdown"> <button class="dropbtn">4. How can you book a project space in one of the wings?</button>
    <div class="dropdown-content">
        <a href="#">There are a total of 26 project group rooms that can be found on the 1st, 2nd and 3rd floor.
            The rooms are suitable for 6-8 people.These rooms can be reserved via the Self-service portal. </a>
    </div></div>

<br>

<div class="dropdown"> <button class="dropbtn">5.What are the instructions if you want to park your car at the HZ parking lot?</button>
    <div class="dropdown-content">
        <a href="#">Employees and students can park their car in the parking garage at Kousteensedijk 3.
            The parking garage is between the Court and the Library.
            On presentation of the entry ticket, you will receive an exit ticket free of charge at the HZ reception.
            This is a pilot that will be evaluated by the municipalty and HZ after one year.</a>
    </div></div>
    -->



