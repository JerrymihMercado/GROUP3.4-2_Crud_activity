$(document).ready(function(){
    displayAll();


    function displayAll(){
        $.ajax({
            type: 'GET',
            url: 'config/viewRecords.php',
            dataType: 'text',
            success: function(data, status, xhr){
                $("#viewRecords .tbody").html(data);
            },
            error: function(xhr, status, error){
                $message = "<h1>"+xhr['status']+" "+error+"</h1>";
                $("body").html($message);
            }
        });
    }


    $(document).on('click', '.edit', function(e){
        var id = e.target.value;
        $.ajax({
            type: 'GET',
            url: 'config/viewRecord.php?id='+id,
            dataType: 'json',
            success:function(data, status, xhr){
                $("#editForm [name = 'id']").val(data["id"]);
                $("#editForm [name = 'name']").val(data["name"]);
                $("#editForm [name = 'age']").val(data["age"]);
                $("#editForm [name = 'course']").val(data["course"]);
            },
            error:function(xhr, status, error){
                $message = "<h1>"+xhr['status']+" "+error+"</h1>";
                $("body").html($message);
            }
        });
    });

    $(document).on('click', '.delete', function(e){
        var id = e.target.value;
        $.ajax({
            type: 'GET',
            url: 'config/deleteRecord.php?id='+id,
            success:function(data, status, xhr){
                displayAll();
            },
            error:function(xhr, status, error){
                $message = "<h1>"+xhr['status']+" "+error+"</h1>";
                $("body").html($message);
            }
        });
    });
    
    $("#editForm").submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'config/updateRecord.php',
            data: data,
            success: function(data, status, xhr){
                displayAll();
            },
            error:function(xhr, status, error){
                $message = "<h1>"+xhr['status']+" "+error+"</h1>";
                $("body").html($message);
            }
        });
    });

    $("#addForm").submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'config/createRecord.php',
            data: data,
            success: function(data, status, xhr){
                displayAll();
            },
            error:function(xhr, status, error){
                $message = "<h1>"+xhr['status']+" "+error+"</h1>";
                $("body").html($message);
            }
        });
    });
//last bracket
});