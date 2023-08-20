// Function to calculate attendance percentage
document.getElementById('submit').onclick = function() {
    let lecs_attended = parseInt(document.getElementById('attended-lecs').value);
    let total_lecs = parseInt(document.getElementById('total-lecs').value);
    
    if (total_lecs === 0) {
        document.getElementById('attendance-percentage').innerHTML = "Total lectures cannot be zero.";
        return;
    }

    let attendance_percent = (lecs_attended / total_lecs) * 100;
    document.getElementById('attendance-percentage').innerHTML = 'Current percentage = ' + attendance_percent.toFixed(2) + '%';
};


document.getElementById('calculate').onclick = function(){
    let sem1 = parseFloat(document.getElementById('sem1-gpa').value);
    let sem2 = parseFloat(document.getElementById('sem2-gpa').value);

    let cgpa = (sem1 + sem2)/2;
    document.getElementById('cgpa').innerText = " Current CPGA is: " + cgpa;
}