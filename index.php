<?php
// index.php

// Determine which content to show based on the 'chapter' URL parameter
$chapter = 'foss'; // default chapter
if (isset($_GET['chapter'])) {
    $chapter = $_GET['chapter'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Jetspiking's Libre Software</title>
<style>
    body {
        margin: 0;
        font-family: 'Courier New', Courier, monospace;
        background-color: #e0e0e0; /* Slightly darker than content background */
    }
    .header {
        background-color: #ffffff; /* White background */
        color: #000000; /* Black color for text */
        padding: 10px 20px; /* Smaller top and bottom padding, added side padding */
        text-align: center;
        font-size: 24px; /* Adjust the font size as needed */
        border-bottom: 2px solid #000000; /* Black bottom border */
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }
    .sidebar {
        height: calc(100vh - 40px); /* Adjusted height to account for header */
        width: 200px; /* Adjusted the width for better fit */
        position: fixed;
        left: 0;
        top: 40px; /* Adjusted top to account for header */
        background-color: #d0d0d0; /* Slightly darker than body background */
        padding: 10px; /* Reduced padding */
        box-sizing: border-box; /* Makes sure padding does not add to the width */
        overflow-y: auto; /* Enables scrolling on the menu */
    }
    .menu-section h2 {
        background-color: #006400; /* Dark green background for section titles */
        color: #ffffff; /* White color for text */
        padding: 5px 10px; /* Reduced padding for the section titles */
        margin: 0; /* Remove default margins */
        font-size: 16px; /* Reduced font size */
    }
    .menu-item {
        padding: 2px 10px; /* Reduced padding for a more compact look */
        display: block;
        color: #006400; /* Dark green color for text */
        text-decoration: none;
        font-size: 14px;
    }
    .menu-item:hover {
        background-color: #c8e6c9; /* Light green background for hover state */
    }
    .content {
        margin-top: 40px; /* Adjusted to account for fixed header */
        margin-left: 210px; /* Adjusted to match the new sidebar width */
        padding: 10px 20px; /* Reduced padding */
        background-color: #ffffff; /* White background for content */
        min-height: calc(100vh - 40px); /* Full height minus the header */
    }
    .content embed {
        width: 100%;
        height: 100%;
    }
    .chapter-title {
        font-size: 24px;
        margin-bottom: 10px; /* Reduced margin bottom */
        color: #000000; /* Black color for titles */
    }
</style>
</head>
<body>

<div class="header">Jetspiking's Libre Software</div>

<div class="sidebar">
    <!-- Personal Section -->
    <div class="menu-section">
        <h2>Personal</h2>
        <a href="?chapter=about" class="menu-item">About</a>
        <a href="?chapter=cv" class="menu-item">CV</a>
        <a href="?chapter=certificates" class="menu-item">Certificates</a>
    </div>
    <!-- Programming Section -->
    <div class="menu-section">
        <h2>Programming</h2>
        <a href="?chapter=foss" class="menu-item">Free Open Source Software</a>
    </div>
    <!-- Others Section -->
    <div class="menu-section">
        <h2>Others</h2>
        <a href="?chapter=websites" class="menu-item">Websites</a>
        <a href="?chapter=publications" class="menu-item">Publications</a>
    </div>
</div>

<div class="content">
    <h1 class="chapter-title">
        <?php
        // Refactor the chapter title display logic using a switch statement
        switch ($chapter) {
            case 'about':
                echo 'About Me';
                break;
            case 'foss':
                echo 'Free Open Source Software';
                break;
            case 'cv':
                echo 'CV';
                break;
            default:
                echo ucfirst($chapter);
                break;
        }
        ?>
    </h1>
    <?php
    // Display content based on the chapter
    switch ($chapter) {
        case 'about':
           
            echo '<p>In my spare time, I enjoy going out with friends, as well as singing, dancing, and playing the guitar. During the summer, I love driving my 1980 Triumph TR7 oldtimer. The rest of my time is spent programming, listening to \'80s rock music, occasionally gaming (with OpenTTD being a favorite), and watching series. My top series are \'Doctor Who,\' \'Stargate,\' and \'The Mentalist.\'</p>';
    
            echo '<div style="display:flex; flex-wrap:wrap; gap:10px; justify-content:left; align-items:center; margin-bottom:10px;">';
            echo '<img src="Outside.jpg" alt="Outdoors" style="flex: 1 1 auto; width: calc(50% - 5px); max-width: 300px; height: auto;">';
            echo '<img src="Profile.jpeg" alt="Profile" style="flex: 1 1 auto; width: calc(50% - 5px); max-width: 300px; height: auto;">';
            echo '</div>';

            echo '<div style="text-align:left;">'; // Center the oldtimer image
            echo '<img src="Oldtimer.jpg" alt="Oldtimer Car" style="width:100%; max-width:600px; height:auto;">';
            echo '</div>';

            echo '<p>Connect with me on LinkedIn:</p>';
            echo '<a href="https://www.linkedin.com/in/dustinhendriks/" target="_blank">';
            echo 'https://www.linkedin.com/in/dustinhendriks/';
            echo '</a>';
            break;
        case 'cv':
            echo '<embed src="cv.pdf" type="application/pdf" style="width:100%;height:calc(100vh - 40px);">';
            break;
            case 'foss':
                $repositories = [
                    ['WindowsPhoneOnline', 'Source code for the Windows Phone Online archive website.'],
                    ['Roblocks', 'Accessible UI-driven programming for your product.'],
                    ['FeedSurf', 'RSS Client Application.'],
                    ['ClockPRO', 'A clock widget for Windows desktop.'],
                    ['PhotoviewPRO', 'A photoviewer application for Windows.'],
                    ['TotallyScans', 'Cross Platform GUI for VirusTotal.'],
                    ['ShutdownWizard', 'Classic shutdown wizard dialog opener for Windows.'],
                    ['AndME', 'Android Minimal Edition Launcher.'],
                    ['Taskbar11', 'Change the position and size of the Taskbar in Windows 11.'],
                    ['Launcher8', 'Application launcher in the style of Windows Phone.'],
                    ['CHIP-8-Manager', 'A CHIP-8 manager that allows creating virtual CHIP-8 machines.'],
                    ['TeleDesk', 'Cross-platform desktop application for NOS Teletekst.'],
                    ['WPAppInstall', 'Deploy apps to your (unlocked) Windows Phone 8 / 10 device(s).'],
                    ['OpenSystemQuery', 'Inspect your device and view the systems specifications.'],
                    ['Blockworld', 'C++ / OpenGL Blockworld Demo.'],
                    ['WindowsPhone_TicTacToe', 'Get TicTacToe Ultimate on your Windows 10 (Mobile) device.'],
                    ['WindowsPhone_HiddenLaunch', 'Get HiddenLaunch on your Windows 10 (Mobile) device.'],
                    ['WindowsPhone_FSAM', 'Get File System Access Modifier (FSAM) on your Windows 10 Mobile device.'],
                    ['WindowsPhone_WebWhatsApp', 'Get WebWhatsapp on your Windows 10 (Mobile) device.'],
                    ['Pimage', 'Swap every pixel from your favorite .png for a number in Pi.'],
                ];
    
                echo '<ul>';
                foreach ($repositories as $repo) {
                    echo '<li>';
                    echo '<a href="https://github.com/jetspiking/' . $repo[0] . '" target="_blank">' . $repo[0] . '</a>: ';
                    echo $repo[1];
                    echo '</li>';
                }
                echo '</ul>';
                break;
        case 'certificates':
            echo '<ul>';
            echo '<li><a href="https://drive.google.com/file/d/1D00pVn1TmEDzqkhh297tIcU_lOy2KN7F/view" target="_blank">Private Investigator (Particulier Onderzoeker) - Jan 2023</a></li>';
            echo '<li><a href="https://drive.google.com/file/d/1ANM7tgX9M07sVa0NbAaQ7vnKqw4PZs7/view" target="_blank">Marriage Officiant (Buitengewoon Ambtenaar Burgerlijke Stand) - Jan 2023</a></li>';
            echo '<li><a href="https://drive.google.com/file/d/190MFsSc8LXnYN6f1vzo0Eor--50TPzKgI/view" target="_blank">Certificate of Competence - Jun 2022</a></li>';
            echo '<li><a href="https://drive.google.com/file/d/1L6tvjE0vI1FCYuhdpiEAkL0SOH8HgbLb/view" target="_blank">Basic Life Support (BLS) - Apr 2022</a></li>';
            echo '<li><a href="https://drive.google.com/file/d/1AdtMSn0hILGaAlK3XJhPwJ5Xk3H4RsFA/view" target="_blank">Minor Certificate (IVL) - Feb 2022</a></li>';
            echo '<li><a href="https://www.efset.org/cert/BhaM9J" target="_blank">EF Standard C2 - Mar 2021</a></li>';
            echo '<li><a href="https://drive.google.com/file/d/1JPJSA42x207H96YWVGv18Txu9--tWIOG5/view" target="_blank">Propaedeutic certificate - Oct 2019</a></li>';
            echo '<li><a href="https://drive.google.com/file/d/1Qao0pcCBPF8o106wHKpvBEJAS1xL1MV65/view" target="_blank">Socrates International Honour Society - Jul 2018</a></li>';
            echo '</ul>';
            break;    
        case 'websites':
            $websites = [
                ['https://computepaper.com/', 'Blog dedicated to technology news.'],
                ['https://windowsphone.online/', 'Project to archive Windows Phone history and ensure usability.'],
                ['https://opensystemquery.nl/', 'Website in the context of open source software development.'],
            ];

            // Use an unordered list to display the websites
            echo '<ul>';
            foreach ($websites as $site) {
                echo '<li>';
                echo '<a href="' . $site[0] . '" target="_blank">' . parse_url($site[0], PHP_URL_HOST) . '</a>: ';
                echo $site[1];
                echo '</li>';
            }
            echo '</ul>';
            break;
            break;
        case 'publications':
            $publications = [
                ['https://computepaper.com/panel_digital-dependency/', 'Panel that aims to explore the addictive nature of technology.'],
                ['https://computepaper.com/opinion_revisiting-our-employment-of-smartphones/', 'Article about the involved dangers of smartphone usage.'],
                ['https://computepaper.com/project_a-second-life-for-the-windows-phone/', 'Article about Windows Phone.'],
                ['https://tweakers.net/reviews/10364/', 'Introduction to the development of emulators.'],
                ['https://tweakers.net/reviews/9778/', 'Article about the Rust programming language.'],
                ['https://tweakers.net/reviews/9628/', 'Article about the PineTime smartwatch.'],
            ];
        
            // Use an unordered list to display the publications
            echo '<ul>';
            foreach ($publications as $publication) {
                // Extract the title from the URL, replace dashes with spaces, and capitalize words for display
                echo '<li>';
                echo '<a href="' . $publication[0] . '" target="_blank">' . $publication[0] . '</a>: ';
                echo $publication[1];
                echo '</li>';
            }
            echo '</ul>';
            break;
        default:
            echo '<p>Welcome to the homepage.</p>';
            break;
    }
    ?>
</div>

</body>
</html>
