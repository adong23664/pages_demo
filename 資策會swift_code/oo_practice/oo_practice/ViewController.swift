

import UIKit
class Myadt {
    var son : Int = 1
    var mom : Int = 2
    func fetch ()-> String {
        var answer : String
        answer = "\(son)/\(mom)"
        return answer
    }
}
class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        var R0 : Myadt!
        R0 = Myadt()
        R0.son = 17
        R0.mom = 23
        var msg : String = ""
        msg = R0.fetch()
        print("\(msg)")
        
        var R1 :Myadt!
        R1 = Myadt()
        R1.son = 19
        R1.mom = 29
        print("\(R1.fetch())")
        
      
    }


}

