@extends('templates.main',['title' => '5000-2'])
@section('heading')
Files Uploading
@endsection
@section('content')


<style type="text/css">


.custom-file-upload-hidden {
    display: none;
    visibility: hidden;
    position: absolute;
    left: -9999px;
}
.custom-file-upload {
    display: block;
    width: auto;
    font-size: 16px;
    margin-top: 30px;
    //border: 1px solid #ccc;
    label {
        display: block;
        margin-bottom: 5px;
    }
}

.file-upload-wrapper {
    position: relative; 
    margin-bottom: 5px;
    //border: 1px solid #ccc;
}
.file-upload-input {
    width: $file-upload-size;
    
    font-size: 16px;
    padding: 11px 17px; 
    border: none;
    background-color: $file-upload-color; 
    
    float: left; /* IE 9 Fix */
    &:hover, &:focus { 
        background-color: darken($file-upload-color, 5);
        outline: none; 
    }
}
.file-upload-button {
    cursor: pointer; 
    display: inline-block; 
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    padding: 11px 20px; 
    border: none;
    margin-left: -1px;  
    background-color: darken($file-upload-color, 10); 
    float: left; /* IE 9 Fix */
    
    &:hover {
        background-color: darken($file-upload-color, 20);
    }
}

</style>
<form method="POST" action="your view" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">


  {!! csrf_field() !!}

<span class="bg-info" >NOTE: THE DOCUMENTS SHOULD BE IN .pdf OR .jpeg(should be clear) FORM </span>
<br>
<br>
<div class="row">
      <div class="col-sm-1" >
        <label>1</label>
      </div>
      <div class="col-sm-6" >
        <label >Land Details</label>
      </div>
      <div class="col-sm-4">
       
        <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file1" name="myfiles1[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>
   </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>2</label>
      </div>
      <div class="col-sm-6" >
        <label >Building Details</label>
      </div>
      <div class="col-sm-4">

         <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file2" name="myfiles2[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
    <br />
<span id="lblError2" style="color: red;"></span>
</div>
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>3</label>
      </div>
      <div class="col-sm-6" >
        <label >any other amount on the name of college? Attach proofs.</label>
      </div>
      <div class="col-sm-4">

         <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file3" name="myfiles3[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>4</label>
      </div>
      <div class="col-sm-6" >
        <label > Permisstions from : (NCTE, AICTE, PB.GOVT.etc) upload the permission letter</label>
      </div>
      <div class="col-sm-4">

         <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file4" name="myfiles4[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>5</label>
      </div>
      <div class="col-sm-6" >
        <label >The list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.</label>
      </div>
      <div class="col-sm-4">

          <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file5" name="myfiles5[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>
   </div>
   </div>
   <br>
    <div class="row">
      <div class="col-sm-1" >
        <label>6</label>
      </div>
      <div class="col-sm-6" >
        <label >Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.</label>
      </div>
      <div class="col-sm-4">

         <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file6" name="myfiles6[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>

     </div>
   </div>
   <br/>
   <div class="row">
      <div class="col-sm-1" >
        <label>7</label>
      </div>
      <div class="col-sm-6" >
        <label >Attach proofs. If bank have any other amount on the name of college? </label>
      </div>
      <div class="col-sm-4">

        <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file7" name="myfiles7[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>
     </div>
   </div>
   <br>
    <br/>
   <div class="row">
      <div class="col-sm-1" >
        <label>8</label>
      </div>
      <div class="col-sm-6" >
        <label >Attach list of registered members with soft copy of registration form if college has any Registered Managing Comittee?</label>
      </div>
      <div class="col-sm-4">

        <div class="custom-file-upload">
    <!--<label for="file">File: </label>--> 
    <input type="file" id="file8" name="myfiles8[]"/>
    <br />
<span id="lblError1" style="color: red;"></span>
</div>
     </div>
   </div>
   <br/>
   <div class="row">
<div class="col-sm-1" >&nbsp;</div>
<div class="col-sm-6" >&nbsp;</div>
<div class="col-sm-4 text-justify" >

<button type="submit" id="buttonupload" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SAVE</button>
</div></div>

</form>


  
<script type="text/javascript">
  
;(function($) {

      // Browser supports HTML5 multiple file?
      var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
          isIE = /msie/i.test( navigator.userAgent );

      $.fn.customFile = function() {

        return this.each(function() {

          var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
              $wrap = $('<div class="file-upload-wrapper">'),
              $input = $('<input type="text" class="file-upload-input" />'),
              // Button that will be used in non-IE browsers
              $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
              // Hack for IE
              $label = $('<label class="file-upload-button" for="'+ $file[0].id +'">Select a File</label>');

          // Hide by shifting to the left so we
          // can still trigger events
          $file.css({
            position: 'absolute',
            left: '-9999px'
          });

          $wrap.insertAfter( $file )
            .append( $file, $input, ( isIE ? $label : $button ) );

          // Prevent focus
          $file.attr('tabIndex', -1);
          $button.attr('tabIndex', -1);

          $button.click(function () {
            $file.focus().click(); // Open dialog
          });

          $file.change(function() {

            var files = [], fileArr, filename;

            // If multiple is supported then extract
            // all filenames from the file array
            if ( multipleSupport ) {
              fileArr = $file[0].files;
              for ( var i = 0, len = fileArr.length; i < len; i++ ) {
                files.push( fileArr[i].name );
              }
              filename = files.join(', ');

            // If not supported then just take the value
            // and remove the path to just show the filename
            } else {
              filename = $file.val().split('\\').pop();
            }

            $input.val( filename ) // Set the value
              .attr('title', filename) // Show filename in title tootlip
              .focus(); // Regain focus

          });

          $input.on({
            blur: function() { $file.trigger('blur'); },
            keydown: function( e ) {
              if ( e.which === 13 ) { // Enter
                if ( !isIE ) { $file.trigger('click'); }
              } else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
                // On some browsers the value is read-only
                // with this trick we remove the old input and add
                // a clean clone with all the original events attached
                $file.replaceWith( $file = $file.clone( true ) );
                $file.trigger('change');
                $input.val('');
              } else if ( e.which === 9 ){ // TAB
                return;
              } else { // All other keys
                return false;
              }
            }
          });

        });

      };

      // Old browser fallback
      if ( !multipleSupport ) {
        $( document ).on('change', 'input.customfile', function() {

          var $this = $(this),
              // Create a unique ID so we
              // can attach the label to the input
              uniqId = 'customfile_'+ (new Date()).getTime(),
              $wrap = $this.parent(),

              // Filter empty input
              $inputs = $wrap.siblings().find('.file-upload-input')
                .filter(function(){ return !this.value }),

              $file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');

          // 1ms timeout so it runs after all other events
          // that modify the value have triggered
          setTimeout(function() {
            // Add a new input
            if ( $this.val() ) {
              // Check for empty fields to prevent
              // creating new inputs when changing files
              if ( !$inputs.length ) {
                $wrap.after( $file );
                $file.customFile();
              }
            // Remove and reorganize inputs
            } else {
              $inputs.parent().remove();
              // Move the input so it's always last on the list
              $wrap.appendTo( $wrap.parent() );
              $wrap.find('input').focus();
            }
          }, 1);

        });
      }

}(jQuery));



$('input[type=file]').customFile();
</script>

<script type="text/javascript">
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file1");
        var lblError = $("#lblError1");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file2");
        var lblError = $("#lblError2");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file3");
        var lblError = $("#lblError3");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file4");
        var lblError = $("#lblError4");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file5");
        var lblError = $("#lblError5");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file6");
        var lblError = $("#lblError6");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file7");
        var lblError = $("#lblError7");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
    $("body").on("click", "#buttonupload", function () {
        var allowedFiles = [".jpg",".jpeg", ".pdf"];
        var fileUpload = $("#file8");
        var lblError = $("#lblError8");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.val().toLowerCase())) {
            lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
            return false;
        }
        lblError.html('');
        return true;
    });
</script>


@endsection