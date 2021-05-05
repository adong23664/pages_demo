
import UIKit
class A {
    var _b : Int = 5
    func howmany (_ how : Int, _ what : Int) {
        func add (_ what : Int) {}
        for _ in 1...how {
            self.add (what)
        }
    }
    func add (_ what : Int) {
        var _b : Int = 200
        _b += 300
        self._b += what
    }
}
class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        let aaa : A = A()
        
        print("\(aaa._b)")
        
        aaa.howmany(3, 6)
        print("\(aaa._b)")
    }


}

