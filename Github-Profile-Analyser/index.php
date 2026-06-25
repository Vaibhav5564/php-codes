<?php
$userData = null;

if(isset($_GET['username']) && !empty($_GET['username']))
{
    $username = $_GET['username'];

    $url = "https://api.github.com/users/".$username;

    $options = [
        "http" => [
            "method" => "GET",
            "header" => "User-Agent: PHP\r\n"
        ]
    ];

    $context = stream_context_create($options);

    $response = @file_get_contents($url, false, $context);

    if ($response === false) {
        echo '
<div style="
    max-width:500px;
    margin:30px auto;
    padding:20px;
    background:#ffe6e6;
    border-left:6px solid #ff4d4d;
    border-radius:10px;
    text-align:center;
    box-shadow:0 4px 10px rgba(0,0,0,.2);
">

    <h2 style="color:#d63031;">❌ GitHub API Request Failed</h2>

    <p style="color:#555;">
        Unable to fetch GitHub profile.<br>
        Please try again later.
    </p>

</div>

<script>
setTimeout(function(){
    window.location.href = window.location.pathname;
}, 2000);
</script>
';
    } else {
        $userData = json_decode($response, true);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>GitHub Profile Analyzer</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>GitHub Profile Analyzer</h1>

    <form method="GET">
        <input
            type="text"
            name="username"
            placeholder="Enter GitHub Username"
            required
        >

        <button type="submit">Analyze</button>
    </form>

    <?php
    if($userData && !isset($userData['message']))
    {
    ?>

    <div class="card">

        <img src="<?php echo $userData['avatar_url']; ?>">

        <h2><?php echo $userData['name']; ?></h2>

        <p>
            <strong>Username:</strong>
            <?php echo $userData['login']; ?>
        </p>

        <p>
            <strong>Bio:</strong>
            <?php echo $userData['bio']; ?>
        </p>

        <p>
            <strong>Followers:</strong>
            <?php echo $userData['followers']; ?>
        </p>

        <p>
            <strong>Following:</strong>
            <?php echo $userData['following']; ?>
        </p>

        <p>
            <strong>Public Repositories:</strong>
            <?php echo $userData['public_repos']; ?>
        </p>

        <p>
            <strong>Location:</strong>
            <?php echo $userData['location']; ?>
        </p>

        <p>
            <a target="_blank"
               href="<?php echo $userData['html_url']; ?>">
               View GitHub Profile
            </a>
        </p>

    </div>

    <?php
    }
    elseif(isset($_GET['username']))
    {
        echo "<h2>User Not Found</h2>";
    }
    ?>

</div>

</body>
</html>