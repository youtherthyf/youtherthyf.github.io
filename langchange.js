		
	//	function firstvisit(){
			if (document.cookies == "langeng") {
				setCookie("langeng");
			} else {
				setCookie("langara");
			}
			switchlang(document.cookie);
		}

	//	function setlang() {
			var i, en, ara, current;
			en = document.getElementsByClassName("langeng");
			ara = document.getElementsByClassName("langara");
			current = document.getElementsByClassName(document.cookie);
			

			for (i = 0; i < en.length; i++) {
				en[i].style.display = "none";
			}
			for (i = 0; i < ara.length; i++) {
				ara[i].style.display = "none";
			}
			for (i = 0; i < current.length; i++) {
				current[i].style.display = "block";
			}
		}

	//	function switchlang(lang) {
			setCookie(lang);
			setlang();
			}

	//	function setCookie(cvalue) {
			const d = new Date();
			d.setTime(d.getTime() + (10*24*60*60*1000));
			let expires = "expires="+ d.toUTCString();
			document.cookie = cvalue + ";" + expires + ";path=/";
		}
