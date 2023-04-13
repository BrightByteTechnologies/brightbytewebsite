function openNav() {
    // Disable the close button
    document.getElementById("openbtn").disabled = true;
    document.getElementById("closebtn").disabled = true;

    // Make sure it's not scrollable
    document.body.style.overflowY = 'hidden';

    //Open the side navigation area first
    document.getElementById("navbar").style.height = window.innerHeight + "px";
    document.getElementById("sidenav").style.height = window.innerHeight + "px";
    document.getElementById("sidenav").style.display = "block";
    setTimeout(function () {
        // Open what's inside of the side navigation 
        document.getElementById("openbtn").style.display = "none";
        document.getElementById("sidenav").style.top = "0";
        // Re-enable the open/close button after a delay
        document.getElementById("openbtn").disabled = false;
        document.getElementById("closebtn").disabled = false;
    }, 500);
}

function closeNav() {
    // Disable the open button
    document.getElementById("openbtn").disabled = true;
    document.getElementById("closebtn").disabled = true;

    // Set the height back the default
    document.getElementById("navbar").style.height = "100px";
    document.getElementById("sidenav").style.height = "100px";
    // Bring back the open button
    document.getElementById("openbtn").style.display = "block";
    // Close the side navigation
    document.getElementById("sidenav").style.display = "none";
    document.getElementById("sidenav").style.filter = "blur(10px)";
    setTimeout(function () {
        document.body.style.overflowY = '';
        document.getElementById("sidenav").style.filter = "blur(0px)";
        // Re-enable the open/close button after a delay
        document.getElementById("openbtn").disabled = false;
        document.getElementById("closebtn").disabled = false;
    }, 500);
}

var openBtn = document.getElementById("openbtn");
openBtn.addEventListener("click", function () {
    openNav();
});