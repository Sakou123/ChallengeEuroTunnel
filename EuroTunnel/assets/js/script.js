let data_name = ['00086714','00086863','00086904','00087049','00087067','00087105','00087106','00087146','00087265','00087268','00087273']


// Brut, affiche tout en bloc dégueux

// data_name.forEach(element => {
//     fetch("assets/Json/"+element+".json")
//         .then(response => response.json())
//         .then(json => console.log(json));
// });


// Juste PERNR, ObjectSID, Current_Step -> Name

data_name.forEach(element => {
    fetch("assets/Json/"+element+".json")
        .then(response => response.json())
        .then(json => 
            console.log("",
            "PERNR: "+json.PERNR,'\n',
            "ObjectSID: "+json.ObjectSID,'\n',
            "Current_Step: "+json.Current_Step.Name))
});


