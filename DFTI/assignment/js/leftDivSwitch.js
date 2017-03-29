	
	// global functions
	document.getElementById("active").style.color = "#001E2E";
	
	// global vars
	var searchForm = document.getElementById("searchForm");
	var h2 = document.getElementById("h2");
	var addForm = document.getElementById("addForm");
	
	
	// onSearch
	function search(){
		
			searchForm.style.display = "block";
			h2.innerHTML = "Search";
			addForm.style.display = "none";
	}
	
	// onAdd
	function add(){
		
			searchForm.style.display = "none";
			addForm.style.display = "block";
			h2.innerHTML = "Add a review";
		
	}
	
	
	

