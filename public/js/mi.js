function verImg(id){
    $.ajax({
        type: "POST",
        data:"id="+id,
        url:"model/obtenerImg.php",
        success:function(respuesta){
            //console.log(respuesta);
            $('#img').html("<img src=archivos/"+respuesta+" class='img-fluid rounded mx-auto d-block'>")
        }
    })
}