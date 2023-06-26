<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/style-topics.css">
    
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <i class='bx bx-user icon'></i>
                </span>

                <div class="text logo-text">
                    <span class="name">Andrii Kipriianov</span>
                    <span class="email">kipriyanof64@gmail.com</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-list-ul icon' ></i>
                            <span class="text nav-text">Categories</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-question-mark icon' ></i>
                            <span class="text nav-text">Quizzes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bookmark icon'></i>
                            <span class="text nav-text">Favorites</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>       
                <li class="heart">
                    <i class='bx bx-heart icon'></i>
                </li>      
            </div>
        </div>

    </nav>

    <div class="top-bar">
        <a class="main-name text">Quizzeo</a>
        <button class="btnLogin-popup text">Login</button>
    </div>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class = "input_box">
                    <i class='bx bx-envelope icon'></i>
                    <input type="text" required>
                    <label>Email</label>
                </div>
                <div class = "input_box">
                    <i class='bx bx-lock-alt icon' ></i>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
                <div class = "input_box">
                    <i class='bx bx-user icon'></i>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class = "input_box">
                    <i class='bx bx-envelope icon'></i>
                    <input type="text" required>
                    <label>Email</label>
                </div>
                <div class = "input_box">
                    <i class='bx bx-lock-alt icon' ></i>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    

    <section class="">
        <div class="categories">
            
        </div>
        
    </section>

    <script src="{{ asset('js/scripts-topics.js')}}"></script>

</body>
</html>