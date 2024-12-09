<?php
session_start();
require 'backend/db_conn.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulturifiko</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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
<section class="">
    <div class="">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create a New Post</h2>
            <form method='POST' action='create_post_db.php' enctype="multipart/form-data">
                <textarea name="postCaption" placeholder="Write your caption..." rows="4" id="postCaption" required></textarea>
                <input type="file" name="postFiles" id="postFiles" accept="image/*" />
                <input type="text" name="postLocation" id="postLocation" placeholder="Enter location" />
                <button type="submit">Post</button>
            </form>
        </div>
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
<!-- <div class="sidebar">
    <ul class="sidebar-menu">
        <li><a href="#">Home</a></li>
        <li class="search-item"><a href="#">Search</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="create-post.php">Create</a></li>
        <li><a href="#">Profile</a></li>
    </ul>
</div> -->

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


<?php
$user_id = $_SESSION['user_id'];

$sql = "SELECT p.*, u.username FROM posts p 
        LEFT JOIN users u ON p.id = u.id 
        ORDER BY p.created_at DESC";
$posts_result = $conn->query($sql);

if ($posts_result->num_rows > 0) {
    while ($post = $posts_result->fetch_assoc()) {
        $post_id = $post['id'];
        $caption = $post['caption'];
        $location = $post['location'];
        $created_at = $post['created_at'];
        $file_path = $post['file_path'];
        $file_type = $post['file_type'];
        $username = $_SESSION['username'] ?? 'Unknown User';

        // Get likes count
        $likes_sql = "SELECT COUNT(*) as like_count FROM likes WHERE post_id = $post_id";
        $likes_result = $conn->query($likes_sql);
        $likes_count = $likes_result->fetch_assoc()['like_count'];

        // Check if current user liked the post
        $liked_sql = "SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id";
        $liked_result = $conn->query($liked_sql);
        $liked = $liked_result->num_rows > 0;

        // Get comments count
        $comments_sql = "SELECT COUNT(*) as comment_count FROM comments WHERE post_id = $post_id";
        $comments_count_result = $conn->query($comments_sql);
        $comments_count = $comments_count_result->fetch_assoc()['comment_count'];

        // Format date
        $date = date("F j, Y - g:i A", strtotime($created_at));
?>
        <div class="post-container" style="max-width: 600px; margin: 20px auto; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); overflow: hidden;">
            <div class="post">
                <!-- Post Header -->
                <div class="post-header" style="display: flex; justify-content: space-between; align-items: center; padding: 15px; background-color: #f8f9fa;">
                    <div class="user-profile" style="display: flex; align-items: center;">
                        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($username); ?>&background=random" alt="Profile Picture" class="profile-pic" style="width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;">
                        <div class="user-info">
                            <h3 class="username" style="font-size: 18px; margin: 0;"><?php echo htmlspecialchars($username); ?></h3>
                            <?php if (!empty($location)): ?>
                                <p class="location" style="font-size: 14px; color: #6c757d; margin: 0;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> <?php echo htmlspecialchars($location); ?></p>
                            <?php endif; ?>
                            <span class="post-date" style="font-size: 12px; color: #6c757d;"><?php echo $date; ?></span>
                        </div>
                    </div>

                    <!-- Delete Post Option -->
                    <?php if ($user_id == $_SESSION['user_id']): ?>
                        <form method="POST" action="delete_post.php" class="delete-post-form" style="margin: 0;">
                            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                            <button type="submit" class="delete-btn" style="background: none; border: none; color: #dc3545; cursor: pointer;" onclick="return confirm('Are you sure you want to delete this post?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>

                <!-- Post Content -->
                <?php if (!empty($caption)): ?>
                    <div class="post-caption" style="padding: 15px; font-size: 16px; line-height: 1.5;">
                        <?php echo htmlspecialchars($caption); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Image -->
                <?php if (!empty($file_path)): ?>
                    <div class="post-image-container" style="width: 100%; max-height: 500px; overflow: hidden;">
                        <img src="<?php echo htmlspecialchars($file_path); ?>" alt="Post Image" class="post-image" style="width: 100%; height: auto; object-fit: cover;">
                    </div>
                <?php endif; ?>

                <!-- Post Actions -->
                <div class="post-actions" style="display: flex; justify-content: space-around; padding: 15px; border-top: 1px solid #e0e0e0;">
                    <!-- Like Button -->
                    <form method="POST" action="like_post.php" class="like-form" style="margin: 0;">
                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                        <button type="submit" class="like-btn <?php echo $liked ? 'liked' : ''; ?>" style="background: none; border: none; display: flex; align-items: center; color: #007bff; cursor: pointer;">
                            <i class="<?php echo $liked ? 'fas fa-heart' : 'far fa-heart'; ?>" style="margin-right: 5px;"></i>
                            <span><?php echo $likes_count; ?> Likes</span>
                        </button>
                    </form>

                    <!-- Comments Button -->
                    <button class="comments-btn" onclick="toggleComments(<?php echo $post_id; ?>)" style="background: none; border: none; display: flex; align-items: center; color: #007bff; cursor: pointer;">
                        <i class="far fa-comment" style="margin-right: 5px;"></i>
                        <span><?php echo $comments_count; ?> Comments</span>
                    </button>
                </div>

                <!-- Comments Section -->
                <div id="comments-<?php echo $post_id; ?>" class="comments-section" style="display:none; padding: 15px;">
                    <!-- Fetch and display comments -->
                    <?php 
                    $comments_fetch_sql = "SELECT c.*, u.username FROM comments c 
                                           LEFT JOIN users u ON c.user_id = u.id 
                                           WHERE c.post_id = $post_id 
                                           ORDER BY c.created_at DESC";
                    $comments_result = $conn->query($comments_fetch_sql);
                    
                    while ($comment = $comments_result->fetch_assoc()): ?>
                        <div class="comment" style="display: flex; margin-bottom: 10px; position: relative;">
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($comment['username']); ?>&background=random" alt="Commenter" class="commenter-pic" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px;">
                            <div class="comment-content" style="flex-grow: 1;">
                                <strong style="font-size: 14px;"><?php echo htmlspecialchars($comment['username']); ?></strong>
                                <p style="font-size: 14px; margin: 5px 0;"><?php echo htmlspecialchars($comment['comment']); ?></p>
                                <small style="font-size: 12px; color: #6c757d;"><?php echo date("F j, Y - g:i A", strtotime($comment['created_at'])); ?></small>
                            </div>
                            
                            <!-- Delete Comment Option -->
                            <?php if ($user_id == $comment['user_id']): ?>
                                <form method="POST" action="delete_comment.php" class="delete-comment-form" style="margin: 0; position: absolute; top: 0; right: 0;">
                                    <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                                    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                                    <button type="submit" class="delete-comment-btn" style="background: none; border: none; color: #dc3545; cursor: pointer;" onclick="return confirm('Are you sure you want to delete this comment?')">
                                        <i class="fas fa-trash-alt" style="font-size: 12px;"></i>
                                    </button>
                                </form>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>

                    <!-- Comment Input Form -->
                    <form method="POST" action="comment_post.php" class="comment-form" style="padding: 15px;">
                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                        <textarea name="comment" placeholder="Write a comment..." required style="width: 100%; min-height: 80px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
                        <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Post Comment</button>
                    </form>
                </div>
            </div>
        </div>

<?php 
    }
} else {
    echo "<div class='no-posts' style='text-align: center; padding: 20px;'>No posts found</div>";
}
?>

<!-- JavaScript to toggle comments -->
<script>
function toggleComments(postId) {
    var commentsSection = document.getElementById('comments-' + postId);
    commentsSection.style.display = commentsSection.style.display === 'none' ? 'block' : 'none';
}
</script>



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