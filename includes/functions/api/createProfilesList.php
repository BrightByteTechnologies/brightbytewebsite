<?php
function createList($responseData) {
    // Loop through the array and replace the HTML content
$profilesList = "<ul class='auto-grid' role='list' id='profilesList'>";
foreach ($responseData as $person) {
    $firstName = $person['firstName'];
    $lastName = $person['lastName'];
    $position = $person['position'];
    $url = $person['url'];

    $profilesList .= '<li>';
    $profilesList .= '<a class="profile">';
    $profilesList .= '<h4 class="profile__name">' . $firstName . ' ' . $lastName . '</h4>';
    $profilesList .= '<p class="para">' . $position . '</p>';
    $profilesList .= '<img alt="' . $firstName . '" src="' . $url . '" />';
    $profilesList .= '</a>';
    $profilesList .= '</li>';
}
$profilesList .= "</ul>";
return $profilesList;
}
?>