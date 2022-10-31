function changesrc() {
    var Image_Id1 = document.getElementById('image1');
    var Image_Id2 = document.getElementById('image2');
    var Image_Id3 = document.getElementById('image3');
    var Image_Id4 = document.getElementById('image4');
    if (Image_Id1.src.match("1.png")) {
        Image_Id1.src = "3.png";
        Image_Id2.src = "1.png"
        Image_Id3.src = "4.png"
        Image_Id4.src = "2.png"
    }

    else if (Image_Id1.src.match("3.png")) {
            Image_Id1.src = "4.png";
            Image_Id2.src = "3.png"
            Image_Id3.src = "2.png"
            Image_Id4.src = "1.png"
    }

    else if (Image_Id1.src.match("4.png")) {
        Image_Id1.src = "2.png";
        Image_Id2.src = "4.png"
        Image_Id3.src = "1.png"
        Image_Id4.src = "3.png"
    }

    else if (Image_Id1.src.match("2.png")) {
        Image_Id1.src = "1.png";
        Image_Id2.src = "2.png"
        Image_Id3.src = "3.png"
        Image_Id4.src = "4.png"
    }
}