//
//  ViewController.swift
//  practice_hw38
//
//  Created by 楊振東 on 2021/4/13.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        let ca : [UIColor] = [UIColor.yellow, UIColor.red, UIColor.blue, UIColor.green, UIColor.yellow, UIColor.red, UIColor.blue, UIColor.green, UIColor.yellow, UIColor.red, UIColor.blue, UIColor.green,UIColor.yellow, UIColor.red, UIColor.blue, UIColor.green]
                var na : [String] = ["0", "1", "2", "3" ,"4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14","15"]
                var hori : Int
                var v : Int
                let w : Int = 20
                let h : Int = 30
                var name : String
                var sz : Int
                var luckyIndex : Int
                var RN : Int
                
                var btn : UIButton = UIButton()
                for cs in 0...15
                {
                    btn  = UIButton()
                    btn.setTitleColor(UIColor.black, for: .normal)
                    
                    btn.backgroundColor = ca[cs]
                    hori = w * (cs % 4) * 2 + w
                    v = h * (cs / 4) * 2 + h
                    btn.frame = CGRect(x: hori, y: v, width: w, height: h )
                    
                    name = "\(cs)"
                    // fix 練習 #0 注意以下三行
                    sz = na.count;
                    luckyIndex = Int(arc4random()) % sz
                    name = na [  luckyIndex  ]
                    na.remove(at: luckyIndex)
                    
                    btn.setTitle( name , for: .normal)
                    view.addSubview(btn)
                }
                
                // fix 練習 #1
            }
        }

