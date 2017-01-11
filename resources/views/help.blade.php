@extends('layouts.app')

@section('content')

<!-- clock -->

<div>
  <style type="text/css">
    .datagrid table { 
      border-collapse: collapse; 
      text-align: left; 
      width: 100%; 
    } 
    .datagrid {
      font: normal 12px/150% Arial, Helvetica, sans-serif; 
      background: #fff; 
      overflow: hidden; 
      border: 3px solid #991821;
      -webkit-border-radius: 3px; 
      -moz-border-radius: 3px; 
      border-radius: 3px; 
    }
    
    .datagrid table td, .datagrid table th { 
      padding: 8px 0px; 
    }
    
    .datagrid table thead th {
      background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #991821), color-stop(1, #80141C) );
      background:-moz-linear-gradient( center top, #991821 5%, #80141C 100% );
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#991821', endColorstr='#80141C');
      background-color:#991821; 
      color:#FFFFFF; 
      font-size: 15px; 
      font-weight: bold; 
      border-left: 1px solid #B01C26; 
    } 
    
    .datagrid table thead th:first-child { 
      border: none; 
    }
    
    .datagrid table tbody td {
      color: #80141C; 
      border-left: 1px solid #F7CDCD;
      font-size: 12px;
      font-weight: normal; 
    }
    
    .datagrid table tbody .alt td { 
      background: #F7CDCD; 
      color: #80141C; 
    }
    
    .datagrid table tbody td:first-child { 
      border-left: none; 
    }
    
    .datagrid table tbody tr:last-child td {
      border-bottom: none; 
    }
    
    .datagrid table tfoot td div {
      border-top: 1px solid #991821;
      background: #F7CDCD;
    } 
    
    .datagrid table tfoot td { 
      padding: 0; 
      font-size: 12px;
    } 
    
    .datagrid table tfoot td div{
      width: 110.7%;
      padding: 2px; 
    }
    
    .datagrid table tfoot td ul {
      width: 100%;
      margin: 0; 
      padding:0; 
      list-style: none; 
      text-align: right; 
    }
    
    .datagrid table tfoot  li { 
      display: inline; 
    }
    
    .datagrid table tfoot li a { 
      text-decoration: none; 
      display: inline-block;  
      padding: 2px 8px; 
      margin: 1px;
      color: #FFFFFF;
      border: 1px solid #991821;
      -webkit-border-radius: 3px; 
      -moz-border-radius: 3px; 
      border-radius: 3px; 
      background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #991821), color-stop(1, #80141C) );
      background:-moz-linear-gradient( center top, #991821 5%, #80141C 100% );
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#991821', endColorstr='#80141C');
      background-color:#991821; 
    }
    
    .datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { 
      text-decoration: none;
      border-color: #80141C;
      color: #FFFFFF; 
      background: none; 
      background-color:#991821;
    }
    
    div.dhtmlx_window_active, div.dhx_modal_cover_dv {
      position: fixed !important; 
    }
  </style>

  <div class="datagrid">
    <table>
      <thead>
        <tr>
          <th>Math</th>
          <th>English</th>
          <th>Science</th>
          <th>Technology</th>
          <th>History</th>
        </tr>
      </thead>
      
      <tfoot>
        <tr>
          <td colspan="4">
        </tr>
      </tfoot>
      
      <tbody>
        <tr>
          <td><a href = "{{ secure_url('forumPages/algebra') }}">Algebra 1 & 2</a></td>
          <td><a href = "{{ secure_url('forumPages/english1') }}">English 1</a></td>
          <td><a href = "{{ secure_url('forumPages/chemistry') }}">Chemistry</a></td>
          <td><a href = "{{ secure_url('forumPages/computerapps') }}">Computer Apps</a></td>
          <td><a href = "{{ secure_url('forumPages/ushistory') }}">US History</a></td>
        </tr>
        
        <tr class="alt">
          <td><a href = "{{ secure_url('forumPages/algebracp') }}">Algebra CP</a></td>
          <td><a href = "{{ secure_url('forumPages/english2') }}">English 2</a></td>
          <td><a href = "{{ secure_url('forumPages/physics') }}">Physics</a></td>
          <td><a href = "{{ secure_url('forumPages/infotech') }}">Information Technology Foundations</a></td>
          <td><a href = "{{ secure_url('forumPages/govandciv') }}">Government and Civics</a></td>
        </tr>
        
        <tr>
          <td><a href = "{{ secure_url('forumPages/pre_calculus') }}">Pre-calculus</a></td>
          <td><a href = "{{ secure_url('forumPages/english3') }}">English 3</a></td>
          <td><a href = "{{ secure_url('forumPages/biology') }}">Biology</a></td>
          <td><a href = "{{ secure_url('forumPages/dd123') }}">Digital Design 1/2/3</a></td>
          <td><a href = "{{ secure_url('forumPages/economics') }}">Economics</a></td>
        </tr>
        
        <tr class="alt">
          <td><a href = "{{ secure_url('forumPages/trigonometry') }}">Trigonometry</a></td>
          <td><a href = "{{ secure_url('forumPages/english4') }}">English 4</a></td>
          <td><a href = "{{ secure_url('forumPages/environmentalscience') }}">Environmental Science</a></td>
          <td><a href = "{{ secure_url('forumPages/wd123') }}">Web Design 1/2/3</a></td>
          <td><a href = "{{ secure_url('forumPages/humangeo') }}">Human Geography</a></td>
        </tr>
        
        <tr>
          <td><a href = "{{ secure_url('forumPages/geometry') }}">Geometry</a></td>
          <td><a href = "{{ secure_url('forumPages/honorsenglish') }}">Honors/AP English</a></td>
          <td><a href = "{{ secure_url('forumPages/honorschem') }}">Honors Chemistry</a></td>
          <td><a href = "{{ secure_url('forumPages/programmingandlogic') }}">Programming & Logic</a></td>
          <td><a href = "{{ secure_url('forumPages/worldhistory') }}">World History</a></td>
        </tr>
        
        <tr class = 'alt'>
          <td><a href = "{{ secure_url('forumPages/bridgemath') }}">Bridge Math</a></td>
          <td></td>
          <td></td>
          <td><a href = "{{ secure_url('forumPages/businesscom') }}">Business Communications</a></td>
          <td></td>
        </tr>
        
        <tr>
          <td><a href = "{{ secure_url('forumPages/apcalculus') }}">AP Calculus</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</br>
<center>


<!--
<iframe name="CHATBUTTON_CHATBOX" id="CHATBUTTON_CHATBOX" src="https://www.chatbutton.com/chatroom/18383173/" width="300" height="450" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"><a href="https://www.chatbutton.com/chatroom/18383173/">Enter Chat Room</a></iframe>
<script type="text/javascript">
CHBT_channel="18383173";
CHBT_profanityfilter="1";
CHBT_position="inline";
</script>
<script type="text/javascript" src="https://www.chatbutton.com/c.js">
</script>
</center>
-->


@endsection


<!-- "{{ secure_url('') }}" <-url link form -->
<!-- "{{ secure_asset('') }}" <-picture link form -->