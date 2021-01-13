function poplist() {
    var list = document.getElementById("list");
    var arraylink = ["Week 1\\form.html", "Week 1\\week 1 notes.html",
        "Week 2\\classEx.html", "Week 2\\teamAct.html", "Week 2\\week 2 notes.html",
        "Week 3\\classEx.html", "Week 3\\teamAct.html", "Week 3\\week 3 notes.html",
        "Week 4\\week 4 notes.html", "Week 4\\teamAct.html",
        "Week 5\\week 5 notes hardcoded.html", "Todo\\index.html", "Week 5\\week 5 notes.html",
        "Week 7\\week 7 notes.html",
        "Week 8\\index.html", "Week 8\\week 8 notes.html",
        "Week 9\\week 9 notes.html", "Week 9\\index-START.html",
        "Week 10\\week 10 notes.html",
        "https://willits-alec.github.io/FinalProject/index.html"
    ];
    var arrayname = ["W1 form example", "W1 notes",
        "W2 class Ex", "W2 team activity", "W2 notes",
        "W3 class Ex", "W3 team activity", "W3 notes",
        "W4 notes", "W4 team activity",
        "W5 notes", "Todo", "My attempt at a better notes template",
        "Week 7 notes",
        "pokemon api example", "week 8 notes",
        "week 9 notes", "Week 9 team Activity",
        "week 10 notes",
        "Final Project"

    ];

    for (let index = 0; index < arraylink.length; index++) {
        const element = arraylink[index];
        const name = arrayname[index];
        var li = document.createElement("li");
        //var a creates an A element
        var a = document.createElement("a");
        //set a to a href and give it the site link
        a.setAttribute('href', element);
        //make a display the name
        a.innerHTML = name;
        console.log(element);
        li.appendChild(a);

        console.log(li);
        list.appendChild(li);

    }
}