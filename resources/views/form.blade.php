<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"  href="{{asset('css/styles.css')}}">
</head>
<body>
    <style>
        form{
            margin: 50px 300px;
        }
        .task_list{
            padding: 5px;
            background-color: #ede9e9;
            width: 400px;
            border: 1px solid rgb(193, 191, 191);
            border-radius: 3px; 
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .icon_list_task{
            padding: 0px 3px; 
            border-radius: 5px;
            border: 1px solid gray
        }
        .new_task{
            border: 1px solid rgb(193, 191, 191);
            width: 400px;
            margin-bottom: 20px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .new_task_label , .current_task_label{
            padding: 5px;
            background-color: #f1eded;
            width: 400px;
            border: 1px solid rgb(193, 191, 191);
            margin-bottom: 20px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .second_task , .first_task{
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }
        .input{
            width: 380px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            outline: none; 
            border: 1px solid gray;
        }
        .btn_add_task{
            border: 1px solid gray;
        }
    </style>
    <form action="">
        <div class="task_list">
           <label for="">Task List</label>
            <span class="icon_list_task"><i class="fa-solid fa-bars"></i></span>
        </div>
        <div class="new_task">
           <label for="" class="new_task_label ml-1">New Task</label> <br>
           <label for="" class="m-2">Task</label> <br>
           <input  class="m-2 input" type="text" name="" id=""> <br>
           <button type="submit" class="m-2 btn btn_add_task" >+ Add Task</button>
        </div>
        <div  class="new_task">
            <label for="" class="current_task_label">Current Tasks</label> <br>
            <label for="" class="m-2" style="font-weight:700">Task</label><br>
            <div class="first_task">
                <label for="" class="m-2">First Task</label>
                <button type="button" class="btn btn-danger"> 
                    <i class="fa-solid fa-trash-can"></i>
                    <span>Delete</span>
                </button>
            </div>
            <div class="second_task">
                <label for="" class="m-2">Second Task</label>
                <button type="button" class="btn btn-danger"> 
                    <i class="fa-solid fa-trash-can"></i>
                    <span>Delete</span>
                </button>
            </div>
        </div>
    </form>
</body>
</html>