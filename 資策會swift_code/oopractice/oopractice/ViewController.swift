import UIKit
class TheProduct {
    var pName : String
    var uprice : Int
    init (p pn : String, u ur : Int) {
        pName = pn
        uprice = ur
    }
}
class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        var row : TheProduct
        row = TheProduct(p: "apple", u: 10)
        theRows.append(row)
        row = TheProduct(p: "banana", u: 20)
        theRows.append(row)
        row = TheProduct(p: "orange", u: 30)
        theRows.append(row)
    }

    override func tableView (_ tableView : UITableView, cellForRowAt indexPath: IndexPath) ->UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "mapd35", for: indexPath)
        
        let index : Int = indexPath.row
        cell.textLabel?.text = theRows [ index ].productName
        cell.detailTextLabel?.text = "\(theRows [ index ].unitPrice)"
        return cell
    }
    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int
        {
        
        return theRows.count

    }
    var theRows : [ TheProduct  ]! = [  ]

}

