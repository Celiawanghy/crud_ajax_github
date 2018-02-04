
//Dynamically change the page content according to pagination
$('body').on('click','.pagination a', function(e){
    e.preventDefault();
    var url=$(this).attr('href');

    $("#load").load(url, function(responseTxt, statusTxt, xhr){
        if(statusTxt == "error")
            alert('Items could not be loaded, please try again later.');
    });

    window.history.pushState("", "", url);
});

//Dynamically change current page when delete is clicked
$('body').on('click','.delete', function(e){
    e.preventDefault();
    alert('Are you sure that you want to delete this item?');
    var userId=$(this).val();
    var url=window.location.href;  
    var token = $('input[name="_token"]').attr('value');
    //var page=url.charAt(url.length-1); 
    //alert(token);

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': token
        }
    })

    $.post('./delete', 
    {
        id: userId             

    },
    function(responseTxt, statusTxt, xhr){
        if(statusTxt == "error")
            alert('Something is wrong, please try later.');
        if(statusTxt == "success")
            $("#load").load(url, function(responseTxt, statusTxt, xhr){
            if(statusTxt == "error")
                alert('Items could not be loaded, please try again later.');
    });

    });
});

//Dynamically validate user input for salary field
$('body').on('keyup','#salary', function(e){
    // 
    var selection = window.getSelection().toString();
    if ( selection !== '' ) {
        return;
    }

    // 
    if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
        return;
    }

    // 
    var $this = $( this );
    var input = $this.val();

    // 
    var input = input.replace(/[\D\s\._\-]+/g, "");

    // 
    input = input ? parseInt( input, 10 ) : 0;

    // 
    if($('#province').val()=="Quebéc"){
        $this.val( function() {
            return ( input === 0 ) ? "" : input.toLocaleString( "fr-FR" );
        } );
    }else{
        $this.val( function() {
            return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
        } );
    }
});


