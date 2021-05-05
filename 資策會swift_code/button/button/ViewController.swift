import UIKit

class ViewController: UIViewController {
    var theBtns : [UIButton] = [ ]
    var theBtn : UIButton!
 
    override func viewDidLoad() {
        super.viewDidLoad()
        

        theBtn = UIButton()
        theBtn.backgroundColor = UIColor.darkGray
        theBtn.frame = CGRect(x: 10, y: 90 , width: 50, height: 50)
        theBtn.addTarget(self, action: #selector(thelba(_:)), for: .touchUpInside)
        view.addSubview(theBtn)
        theBtns.append(theBtn)
        
        theBtn = UIButton()
        theBtn.backgroundColor = UIColor.purple
        theBtn.frame = CGRect(x: 10+60, y: 90 , width: 50, height: 50)
        theBtn.addTarget(self, action: #selector(thelba(_:)), for: .touchUpInside)
        view.addSubview(theBtn)
        theBtns.append(theBtn)
        
        theBtn = UIButton()
        theBtn.backgroundColor = UIColor.cyan
        theBtn.frame = CGRect(x: 10+120, y: 90 , width: 50, height: 50)
        theBtn.addTarget(self, action: #selector(thelba(_:)), for: .touchUpInside)
        view.addSubview(theBtn)
        theBtns.append(theBtn)
        
    }
    @objc
    func thelba(_ sender:UIButton){
        for index in 0..<theBtns.count{
            if theBtns [ index] === sender{
                print("第\(index)個元素")
                break
            }
        }
        print()
            }


}

