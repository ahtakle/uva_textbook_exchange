function Textbook (name, author, courseName, professor, price, type, condition,
  edition, isbn, image) {
  this.name = name;
  this.author = author;
  this.courseName = courseName;
  this.professor = professor;
  this.price = price;
  this.type = type;
  this.condition = condition;
  this.edition = edition;
  this.isbn = isbn;
  this.image = image;
  this.toString = function () {
    var str = this.name + ", " + this.author + ", " + this.courseName + ", " +
    this.professor + ", " + this.price + ", " + this.type + ", " + this.condition +
    ", " + this.edition + ", " + this.isbn + ", " + this.image;
    return str;
  };
}

var textbookList = [];

function addTextbook() {
  var typeElement = document.getElementById("type");
  var type = typeElement.options[typeElement.selectedIndex].text;

  var condElement = document.getElementById("condition");
  var condition = condElement.options[condElement.selectedIndex].text;

  textbookList[textbookList.length] = new Textbook(document.getElementById("name").value,
    document.getElementById("author").value,
    document.getElementById("coursename").value,
    document.getElementById("professor").value,
    document.getElementById("price").value,
    type,
    condition,
    document.getElementById("edition").value,
    document.getElementById("isbn").value
    document.getElementById("image").value);


}
