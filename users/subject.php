<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subject</title>
    <link rel="stylesheet" href="../css/subject.css">
    <script>
    var a;
    showHidden() {
        if (a === 1) {
            document.getElementById("add").style.display = "none";
            return a = 0;
        } else {
            document.getElementById("add").style.display = "inline";
            return a = 1;
        }
    }
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <section class="nav-section">
            <h1>Admin</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light nv">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="admin_home.php">Dashboard</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Subject</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">professor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">transcript</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <!-- Page Content  -->
        <div id="subject">
            <div id="content">
                <div class="header">
                    <div>
                        <h1>Subjects</h1>
                    </div>
                    <div>
                        <img src="../images/plus-square.svg" alt="ADD subject" onclick="showHidden()">
                    </div>
                </div>
                <div class="table">
                    <table class="fixed_headers">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Semester</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="add" id="add">
                <h1>Add Subject</h1>
                <form action="" method="POST">
                    <div data-validate="enter The Name">
                        <input class="input100" type="text" name="username-add" placeholder="Name">
                    </div>
                    <div data-validate="enter The Number Of Course">
                        <input class="input100" type="text" name="Number-add" placeholder="Number">
                    </div>
                    <div data-validate="enter The Semester">
                        <input class="input100" type="text" name="Sem-add" placeholder="Semester">
                    </div>
                    <div>
                        <select name="Level2">
                            <option disabled="disabled" selected="selected">level</option>
                            <option>level 1</option>
                            <option>level 2</option>
                            <option>level 3</option>
                            <option>level 4</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>