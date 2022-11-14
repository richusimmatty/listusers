<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User List</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover">

                    <tbody>
                        <?php if(!$users){
        return;
    }?>
                        <?php foreach($users as $user){?>

                        <tr>
                            <?php if($_GET['page_number'] > 1){?>
                            <td><a
                                    href="?user-id=<?php echo $user->id;?>&page_number=<?php echo $_GET['page_number']?>"><?php echo $user->first_name. " " .$user->last_name ;?></a>
                            </td>
                            <?php }else{?>
                            <td><a
                                    href="?user-id=<?php echo $user->id;?>"><?php echo $user->first_name. " " .$user->last_name ;?></a>
                            </td>

                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
                <nav aria-label="...">

                    <ul class="pagination pagination-sm">
                        <?php for($i=1;$i<=$getPages;$i++){?>

                        <li class="page-item"><a class="page-link"
                                href="?page_number=<?php echo $i;?>"><?php echo $i;?></a></li>

                        <?php }?>
                    </ul>
                </nav>
            </div>
            <?php if($getVal){?>
            <div class="col-sm-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th colspan="2"><img class="img-thumbnail" src="<?php echo $getVal->data->avatar;?>"
                                    alt="profile-pic" /></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?php echo $getVal->data->id;?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $getVal->data->email;?></td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $getVal->data->first_name;?></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $getVal->data->last_name;?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <?php }?>
        </div>
    </div>
</body>

</html>