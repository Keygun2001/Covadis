<style>
    .loading {
        font-size: 40px;
        padding-left: 500px;
    }
</style>
<div class="bg-gradient-black">
    <div class="loading ">
    <h1 class="text-white">Creating Room..</h1>

    <img src="Images/loading.gif" alt="" width="500px" height="500px">
    </div>
</div>

<script>
    setTimeout(function(){
            window.location.href = 'http://localhost/Covadis/public/room.php';
         }, 5000);
</script>