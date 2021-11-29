"use strict";
const qlist = document.querySelector("#question-list");
let noQuestion;

document.addEventListener("keypress", function (event) {
  console.log(event);
  if (event.key === " ") {
    const html = `
<div class="mb-3">
    <label for="cat_title" class="form-label">Question Summary</label>
    <input type="text" class="form-control" id="cat_title" name ="cat_title"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Should be of atmost 5-6 words</div>
</div>
<div class="mb-3">
  <label for="cat_title" class="form-label">Question</label>
  <input type="text" class="form-control" id="cat_title" name ="cat_title"  aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text">Write the Question</div>
</div>
<div class="mb-3">
    <label for="cat_desc" class="form-label">Answer</label>
    <input type="text" class="form-control" id="cat_desc" name = "cat_desc" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">The answer given</div>
</div>`;

    noQuestion = Number(document.querySelector("#QuestionNo").value);
    for (let i = 0; i < noQuestion; i++) {
      qlist.insertAdjacentHTML("afterbegin", html);
    }
  }
});
