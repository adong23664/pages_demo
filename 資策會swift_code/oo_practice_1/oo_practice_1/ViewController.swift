import UIKit
class account {
    class func printRate() {
        print(" 百分之\"38\" ")
    }
    var remainder : Double = 100
    func isVIP()->Bool {
        return remainder >= 1000
    }
}
class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        account.printRate()  //不用產生物件
        
        var R0 : account
        R0 = account()  //需產生物件
        var rich = R0.isVIP()
        print("rich 為\(rich)")
        
        var R1 : account
        R1 = account()
        R1.remainder = 1200
        print("R1為\(R1.isVIP())")
    }


}

