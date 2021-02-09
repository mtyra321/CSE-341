function poplist() {
    var list = document.getElementById("list");
    var arraylink = ["./Week 2/W2-TeamAct.html", "./Week 3/team act/team_act.php", "./Week 3/ponder/browse items.php", "./Week 5/team act.php", "./Week 5/ponder.php", "./Week 6/team act.php"];
    var arrayname = ["Week 2 team activity", "Week 3 team activity", "Week 3 ponder", "Week 5 team activity", "Week 5 ponder", "Week 6 team activity"];

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