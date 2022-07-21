document.querySelector("#sub").addEventListener("click", async (e) => {
	e.preventDefault();
	const link = document.querySelector("#link").value.trim();

	const form = new FormData();
	form.append("link", link);

	let r = await fesponse(form);
	document.querySelector(".short_link").innerHTML = r.short_link;
});


let fesponse = (form) =>
	fetch("php/read.php", {
		method: "POST",
		body: form,
	}).then((resp) => resp.json());
