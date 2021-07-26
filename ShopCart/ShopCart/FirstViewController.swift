//
//  FirstViewController.swift
//  ShopCart
//
//  Created by 楊振東 on 2021/7/2.
//

import UIKit

class FirstViewController: UIViewController {
    @IBOutlet weak var number1: UILabel!
    @IBOutlet weak var number2: UILabel!
    @IBOutlet weak var number3: UILabel!
    @IBOutlet weak var mystepper1: UIStepper!
    @IBOutlet weak var mystepper2: UIStepper!
    @IBOutlet weak var mystepper3: UIStepper!
    
    var total = 0
    var unit1 = 0
    var unit2 = 0
    var unit3 = 0
    
    @IBOutlet weak var totalLabel: UILabel!
 
    
    override func viewDidLoad() {
        super.viewDidLoad()
        total = 180 * unit1 + 240 * unit2 + 150 * unit3
        totalLabel.text = "總金額: \(total)"
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destination.
        // Pass the selected object to the new view controller.
    }
    */
    
    
    
    @IBAction func stepper1(_ sender: UIStepper) {
        unit1 = Int(sender.value)
        number1.text = "數量: \(unit1)"
        total = 180 * unit1 + 240 * unit2 + 150 * unit3
        totalLabel.text = "總金額: \(total)"
    }
    
    
    @IBAction func stepper2(_ sender: UIStepper) {
        unit2 = Int(sender.value)
        number2.text = "數量: \(unit2)"
        total = 180 * unit1 + 240 * unit2 + 150 * unit3
        totalLabel.text = "總金額: \(total)"
    }
    
    @IBAction func stepper3(_ sender: UIStepper) {
        unit3 = Int(sender.value)
        number3.text = "數量: \(unit3)"
        total = 180 * unit1 + 240 * unit2 + 150 * unit3
        totalLabel.text = "總金額: \(total)"
    }
    
    
    @IBAction func cancelBtn(_ sender: Any) {
        let alert = UIAlertController(title: "確定取消? ", message: nil , preferredStyle: .alert)
        alert.addAction(UIAlertAction(title: "保留購物車", style: .cancel, handler: { (_) in
            // do nothing
        }))
        alert.addAction(UIAlertAction(title: "清除購物車", style: .destructive, handler: { (_) in
            self.mystepper1.value = 0
            self.mystepper2.value = 0
            self.mystepper3.value = 0
            self.unit1 = 0
            self.unit2 = 0
            self.unit3 = 0
            self.total = 0
            self.totalLabel.text = "總金額: \(0)"
            self.number1.text = "數量: 0"
            self.number2.text = "數量: 0"
            self.number3.text = "數量: 0"
        }))
        
        self.present(alert, animated: true, completion: nil)
        
    }
    
    
    @IBAction func sendBtn(_ sender: Any) {
        if total == 0 {
            return
        }else {
            let controller = UIAlertController(title: "訂單資訊", message: "請輸入資訊", preferredStyle: .alert)
            controller.addTextField { (textField) in
                textField.placeholder = "收件人"
            }
            controller.addTextField { (textField) in
               textField.placeholder = "電話"
               textField.keyboardType = UIKeyboardType.phonePad
            }
            controller.addTextField { (textField) in
                textField.placeholder = "收件地址"
            }
            
            let okAction = UIAlertAction(title: "下單", style: .default) { [self] (_) in
                if controller.textFields?[0].text == "" || controller.textFields?[1].text == "" || controller.textFields?[2].text == ""{
                    let alert = UIAlertController(title: "資料有漏,請重新輸入", message: nil , preferredStyle: .alert)
                    alert.addAction(UIAlertAction(title: "OK", style: .cancel, handler: { (_) in
                        // do nothing
                    }))
                    self.present(alert, animated: true, completion: nil)
                    
                }else {
                    let name = controller.textFields?[0].text
                    let phoneNumber = controller.textFields?[1].text
                    let address = controller.textFields?[2].text
                    let alert = UIAlertController(title: "訂單成立 ", message: "收件人:\(name!)\n電話:\(phoneNumber!)\n地址:\(address!)\n總金額:\(total)" , preferredStyle: .alert)
                    alert.addAction(UIAlertAction(title: "OK", style: .cancel, handler: { (_) in
                        self.mystepper1.value = 0
                        self.mystepper2.value = 0
                        self.mystepper3.value = 0
                        self.unit1 = 0
                        self.unit2 = 0
                        self.unit3 = 0
                        self.total = 0
                        self.totalLabel.text = "總金額: \(0)"
                        self.number1.text = "數量: 0"
                        self.number2.text = "數量: 0"
                        self.number3.text = "數量: 0"
                    }))
                    self.present(alert, animated: true, completion: nil)
                    print(name!, phoneNumber!, address!)
                }

            }
            controller.addAction(okAction)
            let cancelAction = UIAlertAction(title: "取消", style: .cancel, handler: nil)
            controller.addAction(cancelAction)
            present(controller, animated: true, completion: nil)
        }
    }
    
    
}
