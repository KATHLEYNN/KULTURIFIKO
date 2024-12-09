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
            padding-top: 80px;
        }

        section {
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        h2 {
           font-size: 2rem;
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
            <a href="blogging-platform.php" class="active">Blogging Platform</a>
            <a href="leaderboard.php">Leaderboard</a>
            <a href="store.php">Store</a>
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

    /* Toggle class for show/hide */
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

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
      <h1>Discover Amazing Stories</h1>
      <p>Your go-to platform for insightful articles and latest updates.</p>
    </div>
  </section>

<style>
    /* Hero Section */
.hero {
  background: url('https://i.pinimg.com/736x/f4/1b/07/f41b07c3b8634cbc1a58dc660368fba0.jpg') no-repeat center center/cover;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
}

.hero-content {
  max-width: 600px;
}

.hero h1 {
  font-size: 48px;
  margin-bottom: 20px;
}

.hero p {
  font-size: 18px;
  margin-bottom: 30px;
}
</style>

<!-- Side Bar -->
<div class="sidebar">
    <ul class="sidebar-menu">
        <li><a href="#">Home</a></li>
        <li class="search-item"><a href="#">Search</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="create_post.php">Create</a></li>
        <li><a href="#">Profile</a></li>
    </ul>
</div>

<style>
/* Sidebar container */
.sidebar {
    position: fixed;
    top: 60px; 
    left: 0;
    width: 240px;  
    height: 100%;
    background-color: #2d3436;
    padding-top: 30px;
    z-index: 999; 
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 4px 0 12px rgba(0, 0, 0, 0.1);
    border-radius: 0 5px 5px 0;
}

/* Sidebar menu list */
.sidebar-menu {
    list-style: none;
    padding: 0;
    margin-top: 40px; 
    margin-bottom: 0;
    display: flex;
    flex-direction: column;
    gap: 25px; 
    width: 100%;
}

/* Sidebar menu items */
.sidebar-menu li {
    width: 100%;
    text-align: center;
}

/* Sidebar links */
.sidebar-menu a {
    display: block;
    padding: 15px;
    text-decoration: none;
    color: #dfe6e9;
    font-size: 18px; 
    font-weight: 500;
    border-radius: 5px; 
    transition: background-color 0.3s, transform 0.3s ease; 
}

/* Sidebar link hover effect */
.sidebar-menu a:hover {
    background-color: #2980b9; 
    transform: translateX(10px); 
}

/* Sidebar icon */
.sidebar-menu a i {
    margin-right: 10px;
    font-size: 22px; 
    transition: transform 0.3s ease;
}

/* Icon hover effect */
.sidebar-menu a:hover i {
    transform: translateX(5px); 
}

/* Active menu item styling */
.sidebar-menu a.active {
    background-color: #00cec9;
    color: #fff;
}

@media (max-width: 768px) {
    .sidebar {
        width: 60px; /* Collapse the width */
    }

    .sidebar-menu a {
        font-size: 12px; /* Adjust font size */
    }
}
</style>

  <!-- Modal for creating a post -->
<div id="createPostModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Create a New Post</h2>
        <form id="createPostForm" enctype="multipart/form-data">
            <!-- Caption input -->
            <textarea placeholder="Write your caption..." rows="4" id="postCaption" required></textarea>
            
            <!-- File input for choosing a file -->
            <input type="file" id="postFile" accept="image/*" />
            
            <!-- Location input -->
            <input type="text" id="postLocation" placeholder="Enter location" />

            <button type="submit">Post</button>
        </form>
    </div>
</div>

<style>
 /* Main Modal Centered with design */
 .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: linear-gradient(135deg, #ffffff, #f7f7f7);
      border-radius: 16px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
      width: 500px;
      padding: 30px;
      z-index: 1000;
      animation: modalFadeIn 0.4s ease;
      overflow: hidden;
    }

    /* Modal Animation */
    @keyframes modalFadeIn {
      from {
        opacity: 0;
        transform: translate(-50%, -60%);
      }
      to {
        opacity: 1;
        transform: translate(-50%, -50%);
      }
    }

    /* Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 15px;
      cursor: pointer;
      color: #555;
      font-size: 20px;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .close:hover {
      color: #ff5c5c;
      transform: rotate(45deg);
    }

    /* Modal Header */
    h2 {
      text-align: center;
      color: #365486;
      font-size: 22px;
      margin-bottom: 20px;
    }

    /* Form Content */
    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    /* Input and Textarea Styling */
    textarea,
    input[type="text"],
    input[type="file"] {
      border: 1px solid #365486;
      border-radius: 8px;
      padding: 12px;
      font-size: 14px;
      transition: border-color 0.3s ease, transform 0.3s ease;
    }

    textarea:focus,
    input[type="text"]:focus,
    input[type="file"]:focus {
      border-color: #2b6cb0;
      outline: none;
      transform: scale(1.02);
    }

    /* Button Styling with Hover Effects */
    button {
      padding: 12px;
      background: linear-gradient(135deg, #365486, #2b6cb0);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: transform 0.3s ease, background 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #2b6cb0, #365486);
      transform: translateY(-2px);
    }

    /* Posts Feed */
    #postsContainer {
      margin-left: 300px;
      padding: 30px;
      max-width: 800px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .post {
      background: #ffffff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      font-size: 15px;
      color: #333;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      #postsContainer {
        margin-left: 0;
      }

      .modal {
        width: 90%;
      }
    }
</style>

 <!-- Posts Section -->
<div class="container">

    <!-- Post 1 -->
    <div class="post">
        <div class="post-header">
            <img src="https://via.placeholder.com/50" alt="Profile Picture">
            <div>
                <div class="username">John Doe</div>
                <div class="date">December 5, 2024 - 10:30 AM</div>
            </div>
        </div>
        <div class="post-caption">Exploring the beautiful landscapes of Europe!</div>
        <img class="post-image" src="https://www.wemove.eu/sites/wemove.eu/files/webform/campaign/69d46557-b261-44a1-bcfa-7b755f6a2eec.jpeg" alt="Post Image">
        <div class="post-actions">
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-like.png"/>Like</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/speech-bubble.png"/>Comment</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/share.png"/>Share</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/report.png"/>Report</button>
        </div>
    </div>

    <!-- Post 2 -->
    <div class="post">
        <div class="post-header">
            <img src="https://via.placeholder.com/50" alt="Profile Picture">
            <div>
                <div class="username">Jane Smith</div>
                <div class="date">December 4, 2024 - 5:45 PM</div>
            </div>
        </div>
        <div class="post-caption">Sunset at the beach! 🌅</div>
        <img class="post-image" src="https://www.andrewshoemaker.com/images/640/kamaole-3-lifeguard-beach-sunset.jpg" alt="Post Image">
        <div class="post-actions">
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-like.png"/>Like</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/speech-bubble.png"/>Comment</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/share.png"/>Share</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/report.png"/>Report</button>
        </div>
    </div>

    <!-- Post 3 -->
    <div class="post">
        <div class="post-header">
            <img src="https://via.placeholder.com/50" alt="Profile Picture">
            <div>
                <div class="username">Michael Johnson</div>
                <div class="date">December 3, 2024 - 3:15 PM</div>
            </div>
        </div>
        <div class="post-caption">Had an amazing time hiking up the mountain today. 🏞️</div>
        <img class="post-image" src="https://www.travelyukon.com/themes/custom/cossette/src/assets/images//quiz/QUESTION1/Answer2.jpg" alt="Post Image">
        <div class="post-actions">
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-like.png"/>Like</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/speech-bubble.png"/>Comment</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/share.png"/>Share</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/report.png"/>Report</button>
        </div>
    </div>

    <!-- Post 4 -->
    <div class="post">
        <div class="post-header">
            <img src="https://via.placeholder.com/50" alt="Profile Picture">
            <div>
                <div class="username">Emily Davis</div>
                <div class="date">December 2, 2024 - 12:00 PM</div>
            </div>
        </div>
        <div class="post-caption">First snowfall of the season! ❄️</div>
        <img class="post-image" src="https://i0.wp.com/derekmaul.blog/wp-content/uploads/2021/01/img_3642.jpeg?resize=723%2C542&ssl=1" alt="Post Image">
        <div class="post-actions">
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-like.png"/>Like</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/speech-bubble.png"/>Comment</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/share.png"/>Share</button>
            <button><img src="https://img.icons8.com/ios-glyphs/30/000000/report.png"/>Report</button>
        </div>
    </div>

</div>

<style>
    /* Post Container */
    .post {
    background: white;
    margin-bottom: 10px; /* Reduce bottom margin */
    padding: 15px; /* Reduce padding for a smaller container */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 800px; /* Optional: Set a max width to make the post container smaller */
    margin-left: auto; /* Center the post horizontally */
    margin-right: auto; /* Center the post horizontally */
}

        .post-header {
            display: flex;
            align-items: center;
        }

        .post-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-header .username {
            font-weight: bold;
            font-size: 18px;
        }

        .post-header .date {
            font-size: 12px;
            color: #777;
        }

        .post-caption {
            margin: 15px 0;
            font-size: 16px;
        }

        .post-image {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Interaction Buttons */
        .post-actions {
            display: flex;
            justify-content: space-between;
        }

        .post-actions button {
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            color: #777;
            font-size: 14px;
            padding: 5px;
            transition: color 0.3s;
        }

        .post-actions button:hover {
            color: #365486;
        }

        .post-actions button img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
</style>

<script>
    // Get modal elements
    const createPostBtn = document.getElementById("createPostBtn");
    const createPostModal = document.getElementById("createPostModal");
    const closeBtn = document.querySelector(".close");
    const createPostForm = document.getElementById("createPostForm");
    const postCaption = document.getElementById("postCaption");
    const postFile = document.getElementById("postFile");
    const postLocation = document.getElementById("postLocation");
    const postsContainer = document.querySelector(".container");

    // Open the modal
    createPostBtn.addEventListener("click", () => {
        createPostModal.style.display = "block";
    });

    // Close the modal
    closeBtn.addEventListener("click", () => {
        createPostModal.style.display = "none";
    });

    // Close modal if clicked outside of modal content
    window.addEventListener("click", (e) => {
        if (e.target === createPostModal) {
            createPostModal.style.display = "none";
        }
    });

    // Handle the form submission
    createPostForm.addEventListener("submit", (e) => {
        e.preventDefault();

        // Validate input fields
        const caption = postCaption.value.trim();
        const file = postFile.files[0];
        const location = postLocation.value.trim();

        if (!caption || !file || !location) {
            alert("Please fill out all fields and select a file.");
            return;
        }

        // Create a new post element dynamically
        const reader = new FileReader();
        reader.onload = (e) => {
            const newPost = document.createElement("div");
            newPost.classList.add("post");
            newPost.innerHTML = `
                <div class="post-header">
                    <img src="https://via.placeholder.com/50" alt="Profile Picture">
                    <div>
                        <div class="username">You</div>
                        <div class="date">${new Date().toLocaleString()}</div>
                    </div>
                </div>
                <div class="post-caption">${caption}</div>
                <img class="post-image" src="${e.target.result}" alt="Post Image">
                <div class="post-actions">
                    <button><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-like.png"/>Like</button>
                    <button><img src="https://img.icons8.com/ios-glyphs/30/000000/speech-bubble.png"/>Comment</button>
                    <button><img src="https://img.icons8.com/ios-glyphs/30/000000/share.png"/>Share</button>
                    <button><img src="https://img.icons8.com/ios-glyphs/30/000000/report.png"/>Report</button>
                </div>
            `;
            postsContainer.prepend(newPost);
        };

        // Read the selected file and load its data URL
        reader.readAsDataURL(file);

        // Reset the form and close the modal
        createPostForm.reset();
        createPostModal.style.display = "none";
    });
</script>

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
        }
    </style>

</body>
</html>