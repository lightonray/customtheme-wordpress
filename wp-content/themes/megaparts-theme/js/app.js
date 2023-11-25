jQuery(document).ready(function($) {
    // Function to check if the clicked element is outside the sidebar
    function closeSidebarOnClickOutside(event) {
        var sidebar = $('.sidebar');
        var openButton = $('.open-sidebar');

        // If the clicked element is not the sidebar or the open button
        if (!sidebar.is(event.target) && !openButton.is(event.target) && sidebar.has(event.target).length === 0) {
            sidebar.removeClass('active');
            console.log("Sidebar closed");
        }
    }

    // Open sidebar on button click
    $('.open-sidebar').on('click', function(e) {
        e.stopPropagation(); // Stop propagation to prevent immediate closing
        $('.sidebar').toggleClass('active');
        console.log("Sidebar opened");
    });

    // Close sidebar when clicking outside the sidebar
    $(document).on('click', function(event) {
        closeSidebarOnClickOutside(event);
    });

    // Prevent closing when clicking inside the sidebar
    $('.sidebar').on('click', function(e) {
        e.stopPropagation(); // Stop propagation
    });
});