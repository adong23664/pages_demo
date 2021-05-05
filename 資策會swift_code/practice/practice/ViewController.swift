//
//  ViewController.swift
//  practice
//
//  Created by 楊振東 on 2021/4/8.
//

import UIKit

class ViewController: UIViewController {
    class func the(view : UIView, bc : UIColor, ts : String , hori : Int, vert : Int) {
        var btn : UIButton
        btn = UIButton()
        btn.backgroundColor = bc
        btn.setTitle(ts, for: .normal)
        btn.setTitleColor(UIColor.black, for: .normal)
        btn.frame = CGRect(x: hori, y: vert, width: 50,height: 40)
        view.addSubview(btn)
        
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        
        var b : UIColor
        var t : String
        var h : Int
        var v : Int
        
        b = UIColor.red
        t = "右上"
        h = 60
        v = 30
        ViewController.the(view:view , bc: b, ts: t, hori: h, vert: v)
        
        
        b = UIColor.yellow
        t = "右下"
        h = 60
        v = 70
        ViewController.the(view:view , bc: b, ts: t, hori: h, vert: v)
        
        b = UIColor.green
        t = "左上"
        h = 10
        v = 30
        ViewController.the(view:view , bc: b, ts: t, hori: h, vert: v)
        
        b = UIColor.blue
        t = "左下"
        h = 10
        v = 70
        ViewController.the(view:view , bc: b, ts: t, hori: h, vert: v)
    }


}

