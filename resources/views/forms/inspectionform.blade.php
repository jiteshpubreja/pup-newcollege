@extends('templates.main')
@section('heading')
First Ragistration Form
@endsection
@section('content')


<strong>Inspections should be scheduled at least 24 hours in advance. </strong> Inspections are performed between the hours of:</p>
  <br>
  <div><strong>• 9:00 am - 5:00 pm&nbsp; Monday through Friday</strong>
  </div>
  <br> 
  <div class="container">
         <form class="form-horizontal" action="database.php?method=insert" method="GET">
         
    <div class="form-group">
    <label class="control-label col-sm-2" for="Refid">Ref Id:</label>
      <div class="col-sm-10">
         <input type="Text" class="form-control" required id="Refid" placeholder="Enter Reference Id">
         </div>
         </div>
         
  
        
        <div class="form-group">
    <label class="control-label col-sm-2" for="clgadrs">College Address:</label>
    
      <div class="col-sm-10">
         <input type="Text" class="form-control" required id="clgadrs" placeholder="Enter College Address">
         </div>
         </div>
         
         <div class="form-group">
    <label class="control-label col-sm-2" for="insptype">Type Of Inspection:</label>
    <div class="col-sm-10">
          <input type="Text" class="form-control" required id="insptype" placeholder="Enter College Address">
         </div>
         </div>
         <div class="form-group">
    <label class="control-label col-sm-2" >Date OF Inspection:</label>
          
         
          <div class="col-sm-10">
        
          <select class="control-label col-sm-2" name="day" required id="day">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          &nbsp;
          <select class="control-label col-sm-2" name="month" required id="month">
            <option> January</option>
            <option>February</option>
            <option>march.</option>
            <option>April</option>
            <option>may</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
           &nbsp;
          <select class="control-label col-sm-2" name="year" required id="year">
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
          </select>
          </div>
         </div>
          <div class="form-group">
    <label class="control-label col-sm-2" >Time Preference:</label>
          
         
          <div class="col-sm-10">
        
          <select class="control-label col-sm-2" name="time" required id="time">
        
            <option value="0" selected="selected">No Preference</option>
            <option value="1">Morning</option>
            <option value="2">Evening</option>
          </select>
        </div>
        </div>
        <div class="form-group">
    <label class="control-label col-sm-2" for="addinfo">Addditional Information:</label>
    <div class="col-sm-10">
          <textarea class="form-control"  id="addinfo"></textarea>
         </div>
         </div>
        
        
            <div class="form-group">
          <label  class="control-label col-sm-2" for="contactname">Contact Name:</label>
          <div class="col-sm-10">
          <input class="form-control" name="contactname" type="text" required id="contactname">
          </div>
          </div>
          
        
          <div class="form-group">
          <label  class="control-label col-sm-2" for="contactemail">Contect Email:</label>
          <div class="col-sm-10">
          <input class="form-control" name="contactemail" type="text" required id="contactemail">
          </div>
          </div>
          <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
        </form>




@endsection