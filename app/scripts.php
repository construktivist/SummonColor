<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script>
  $(document).ready(function(){
    console.log("Document loaded and scripts ready");

  $("#summon").on("click", function(){
    console.log("Summon button has been clicked");

    $.ajax({
      type:"GET",
      url: "./app/summon.php",
      success: function(){
        console.log("Summon AJAX request was successful");
      },
      error: function(){
        console.log("Summon AJAX request failed")
      },

    })

    .done(function(data){
      console.log(data);
      console.log("Summon data received");
      $("#output").append(data);
    })

  })

});

</script>
