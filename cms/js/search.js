        // Function to perform the search
        function performSearch() {
            const searchInput = document.getElementById("search-input").value.toLowerCase();
            const courseList = document.getElementById("courses-list");

            const courseItems = courseList.querySelectorAll(".courses-wrapper");

            for (const courseItem of courseItems) {
                const courseTitle = courseItem.querySelector(".courses-heading h1").innerText.toLowerCase();
                if (courseTitle.includes(searchInput)) {
                    courseItem.style.display = "block";
                } else {
                    courseItem.style.display = "none";
                }
            }
        }
        document.getElementById("search-input").addEventListener("input", performSearch);