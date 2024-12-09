<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulturifiko</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <body>
    <style>
    /* General */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #4A4947;
            line-height: 1.6;
            padding-top: 120px;
        }

        section {
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        h1 {
           font-size: 3rem;
           margin-bottom: 10px;
           color: #333;
        }

        h2 {
           font-size: 2rem;
           margin-bottom: 10px;
           color: #333;
        }

        p {
           font-size: 1.8rem;
           margin-bottom: 10px;
           color: #333;
        }
    </style>
    
    <!-- Navigation Bar -->
    <div class="navbar">
        <div style="display: flex; align-items: center;">
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/462567709_1724925585031052_4490126238712417040_n.png?_nc_cat=109&ccb=1-7&_nc_sid=0024fc&_nc_ohc=aXcrO29n7uIQ7kNvgHCi3nC&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.xx&oh=03_Q7cD1QEYs_r8YD6E0edmvQDXiy__0n-15fylEZhQIi5GI1RD2Q&oe=676A986A" alt="Kulturifiko Logo">
            <h1>Kulturifiko</h1>
        </div>
        <div>
            <a href="home.php">Home</a>
            <a href="blogging-platform.php">Blogging Platform</a>
            <a href="leaderboard.php">Leaderboard</a>
            <a href="store.php" class="active">Store</a>
            <div class="dropdown">
                <a href="#" class="dropdown-btn" onclick="toggleDropdown()">Menu ▼</a>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="#">Logout</a>
                </div>
            </div>
            <a href="login.php">Log In</a>
        </div>
    </div>

    <style>
    /* Navigation Bar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #365486;
            padding: 20px 40px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar img {
            height: 50px;
            width: auto;
        }

        .navbar h1 {
            color: #DCF2F1;
            font-size: 2rem;
            font-weight: 600;
            margin-left: 10px;
        }

        .navbar a {
            color: #DCF2F1;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #7FC7D9;
            color: #0F1035;
        }

        .navbar a.active {
            background-color: #000;
            color: #fff;
        }
        
    /* Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 4px;
        }

        .dropdown-content a {
            color: black;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .dropdown-content a:last-child {
            border-bottom: none;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .show {
            display: block;
        }
    </style>

    <script>
        function toggleDropdown() {
            var dropdownContent = document.querySelector(".dropdown-content");
            dropdownContent.classList.toggle("show");
        }
    </script>
</head>

<body>
    <!-- Sidebar and Main Content -->
    <div class="container">
        <aside class="sidebar">
            <h2>Filter</h2>

            <!-- Category Filter -->
            <div class="filter-group">
                <h3>Category</h3>
                <ul>
                    <li><input type="checkbox" checked> <label>Travel Jackets</label></li>
                    <li><input type="checkbox" checked> <label>Location Patches</label></li>
                    <li><input type="checkbox" checked> <label>Award Pins</label></li>
                </ul>
            </div>

            <!-- Price Filter -->
            <div class="filter-group">
                <h3>Price</h3>
                <ul>
                    <li><input type="checkbox" checked> <label>Below $20</label></li>
                    <li><input type="checkbox" checked> <label>$20 - $50</label></li>
                    <li><input type="checkbox" checked> <label>Above $50</label></li>
                </ul>
            </div>

            <!-- Continent Filter -->
            <div class="filter-group">
                <h3>Continent</h3>
                <ul>
                    <li><input type="checkbox" checked> <label>Asia</label></li>
                    <li><input type="checkbox" checked> <label>Europe</label></li>
                    <li><input type="checkbox" checked> <label>North America</label></li>
                </ul>
            </div>
        </aside>

        <style>
          /* Sidebar */
          .container {
              display: flex;
              flex-wrap: wrap;
          }
  
          .sidebar {
              width: 20%;
              background: linear-gradient(180deg, #365486 0%, #4a4f70);
              color: #fff;
              padding: 50px;
              box-sizing: border-box;
              height: 100vh;
              position: sticky;
              top: 100px;
              border-right: 2px solid #fff;
          }
  
          .sidebar h2, .sidebar h3 {
              margin-top: 20px;
              font-size: 1.5rem;
          }
  
          .filter-group ul {
              list-style: none;
              padding: 0;
          }
  
          .filter-group li {
              margin-bottom: 10px;
          }
  
          input[type="checkbox"] {
              margin-right: 10px;
          }
      </style>
      
        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Travel Apparel</h1>
                <p>Showcase your travel journey by earning patches and award pins!</p>
            </header>
        
                <!-- Travel Jackets Section -->
                <div class="category">Travel Jackets</div>
                <div class="item-container">
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/a3/1d/17/a31d17c73e9f47409249224ab6be3825.jpg" alt="Black Jacket">
                    <h3>Traveler's Jacket - Black</h3>
                    <p>Earn patches and personalize with style!</p>
                    <div class="item-footer">
                      <span>$49.99</span>
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/af/87/40/af87407f528719354f93fcfa46ec8376.jpg" alt="White Jacket">
                    <h3>Traveler's Jacket - White</h3>
                    <p>Customize your jacket with earned patches.</p>
                    <div class="item-footer">
                      <span>$49.99</span>
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                </div>
              
                <!-- Location Patches Section -->
                <div class="category">Location Patches</div>
                <div class="item-container">
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/9a/af/da/9aafdaa6b112d11e162f19ffccf35848.jpg" alt="France Patch">
                    <h3>France Patch</h3>
                    <p>Earn this exclusive design on your journey!</p>
                    <div class="item-footer">
                      <span>$9.99</span>
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/97/24/d2/9724d2b67475b58e815f784bf1e5b87f.jpg" alt="England Patch">
                    <h3>England Patch</h3>
                    <p>Perfect for collectors and explorers alike.</p>
                    <div class="item-footer">
                      <span>$9.99</span>
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                </div>
              
                <!-- Award Pins Section -->
                <div class="category">Award Pins</div>
                <div class="item-container">
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/9f/83/99/9f83994532dc9a6a438c3170ceda61da.jpg" alt="Explorer’s Elite">
                    <h3>Explorer’s Elite Badge</h3>
                    <p>Earn this badge to signify your commitment to exploration.</p>
                    <div class="item-footer">
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/8b/a4/75/8ba47514b0a30f22a6cdbd441b5d625f.jpg" alt="Wanderlust Champion">
                    <h3>Wanderlust Champion Pin</h3>
                    <p>A token of achievement for those who explore the extraordinary.</p>
                    <div class="item-footer">
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/54/12/d0/5412d0d32778e197856a7a51459adc44.jpg" alt="Adventure Trailblazer">
                    <h3>Adventure Trailblazer Badge</h3>
                    <p>Mark your journey with a symbol of recognition and style.</p>
                    <div class="item-footer">
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                  <div class="item-card">
                    <img src="https://i.pinimg.com/736x/0e/28/09/0e28093e61a25157a3585252918802c1.jpg" alt="Pathfinder’s Excellence">
                    <h3>Pathfinder’s Excellence Award</h3>
                    <p>Perfect for adventurers and collectors who value prestige.</p>
                    <div class="item-footer">
                      <button class="btn">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              </section>
        </main>
    </div>

    <style>
     
    /* Main Container */
.main-container {
  max-width: 1400px; /* Ensuring large container space */
  margin: 0 auto;
  padding: 10px;
  display: flex;
  flex-direction: column;
  align-items: center; /* Center items horizontally */
}

/* Header Section */
header {
  text-align: center; /* Center-align the h1 and p text */
  margin-bottom: 30px;
}

header h1 {
  font-size: 2.5em;
  color: #333;
  margin-bottom: 10px;
}

header p {
  font-size: 1.2em;
  color: #555;
}

/* Centered Category Titles */
.category {
  font-size: 1.8em; 
  margin: 20px 0;
  color: #333;
  text-align: center; /* Ensure title alignment */
}

/* Item Container (to center items horizontally and add responsiveness) */
.item-container {
  display: flex;
  justify-content: center; /* Center the items */
  gap: 20px;
  flex-wrap: wrap;
}

/* Individual Item Cards */
.item-card {
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 15px;
  text-align: center;
  width: 300px; /* Card width */
  height: 400px; /* Fixed height */
  transition: box-shadow 0.3s ease;
}

.item-card img {
  width: 100%;
  height: 200px; /* Image within the card */
  border-bottom: 1px solid #ddd;
  margin-bottom: 10px;
}

.item-card h3 {
  font-size: 1.1em;
  margin-bottom: 8px;
  color: #333;
}

.item-card p {
  font-size: 0.9em;
  margin-bottom: 10px;
  color: #555;
}

.item-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
  font-size: 0.9em;
  width: 100%;
}

.item-footer span {
  font-weight: bold;
  color: #333;
}

.btn {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 8px 12px; /* Adjust button size */
  cursor: pointer;
  border-radius: 4px;
  transition: background-color 0.2s ease;
}

.btn:hover {
  background-color: #0056b3;
}
    </style>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Kulturifiko. All Rights Reserved.</p>
    </footer>

    <style>
    /* Footer */
        footer {
            background-color: #365486;
            color: #fff;
            text-align: center;
            padding: 25px;
            margin-top: 60px;
        }
    </style>
    
</body>
</html>
