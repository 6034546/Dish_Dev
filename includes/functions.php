<?php
/**
 * Functions for Saffraan & Sahara website
 */

// Database connection function
function dbConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dishdev";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

// Sanitize input function
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to get menu items by category
function getMenuItems($category) {
    $conn = dbConnect();
    $category = $conn->real_escape_string($category);
    
    $sql = "SELECT * FROM menu_items WHERE category = '$category' ORDER BY item_order ASC";
    $result = $conn->query($sql);
    
    $items = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
    }
    
    $conn->close();
    return $items;
}

// Function to save reservation
function saveReservation($name, $email, $phone, $date, $time, $guests, $message) {
    $conn = dbConnect();
    
    // Sanitize inputs
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);
    $date = $conn->real_escape_string($date);
    $time = $conn->real_escape_string($time);
    $guests = (int)$guests;
    $message = $conn->real_escape_string($message);
    
    $sql = "INSERT INTO reservations (name, email, phone, reservation_date, reservation_time, guests, message, status)
            VALUES ('$name', '$email', '$phone', '$date', '$time', $guests, '$message', 'pending')";
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $error = $conn->error;
        $conn->close();
        return $error;
    }
}

// Function to get vacancies
function getVacancies() {
    $conn = dbConnect();
    
    $sql = "SELECT * FROM vacancies WHERE active = 1 ORDER BY date_posted DESC";
    $result = $conn->query($sql);
    
    $vacancies = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $vacancies[] = $row;
        }
    }
    
    $conn->close();
    return $vacancies;
}

// Function to get vacancy by ID
function getVacancyById($id) {
    // Simulate fetching vacancy details from a database
    $vacancies = [
        1 => [
            'title' => 'Chef-kok',
            'description' => 'Verantwoordelijk voor het bereiden van gerechten.',
            'requirements' => "Ervaring als kok\nPassie voor de Arabische keuken",
            'offer' => "Marktconform salaris\nDoorgroeimogelijkheden",
        ],
        2 => [
            'title' => 'Bedieningsmedewerker',
            'description' => 'Gastvrijheid en service staan centraal.',
            'requirements' => "Goede communicatieve vaardigheden\nFlexibel inzetbaar",
            'offer' => "Flexibele werktijden\nGezellig team",
        ],
    ];

    return $vacancies[$id] ?? null;
}

// Function to format date to Dutch format
function formatDutchDate($date) {
    $timestamp = strtotime($date);
    return date('d-m-Y', $timestamp);
}

// Function to check if restaurant is open
function isRestaurantOpen() {
    // Define opening hours
    $openingHours = [
        'monday' => ['12:00', '22:00'],
        'tuesday' => ['12:00', '22:00'],
        'wednesday' => ['12:00', '22:00'],
        'thursday' => ['12:00', '22:00'],
        'friday' => ['12:00', '23:00'],
        'saturday' => ['13:00', '23:00'],
        'sunday' => ['13:00', '22:00']
    ];
    
    $currentDay = strtolower(date('l'));
    $currentTime = date('H:i');
    
    if (isset($openingHours[$currentDay])) {
        $openTime = $openingHours[$currentDay][0];
        $closeTime = $openingHours[$currentDay][1];
        
        return ($currentTime >= $openTime && $currentTime < $closeTime);
    }
    
    return false;
}
?>

