<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>CRUD activity</title>
</head>
<body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-6">
                <form id="addForm">
                        <h3>Add</h3>
                        <input type="number" name="id" placeholder="ID" class="form-control"><br>
                        <input type="text" name="name" placeholder="Name" class="form-control"><br>
                        <input type="number" name="age" placeholder="Age" class="form-control"><br>
                        <input type="text" name="course" placeholder="Course" class="form-control"><br>
                        <button class="btn btn-primary">Create</button>
                    </form>
                </div>
                <div class="col-6">
                 <form id="editForm">
                    <h3>Edit</h3>
                     <input type="number" name="id" placeholder="ID" class="form-control" ><br>
                    <input type="text" name="name" placeholder="Name" class="form-control"><br>
                    <input type="number" name="age" placeholder="Age" class="form-control"><br>
                    <input type="text" name="course" placeholder="Course" class="form-control"><br>
                    <button class="btn btn-success">Update</button>
                </form>
                </div>
            </div>
        </div>


<div class="container mt-3">
    <div id="viewRecords" >
        <table class="table table-bordered">
            <div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Course</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </div>
                <tbody class="tbody">
                    <!--Placeholder for contents-->
                </tbody>
        </table>
    </div>
    </div>  
   
</body>
</html>