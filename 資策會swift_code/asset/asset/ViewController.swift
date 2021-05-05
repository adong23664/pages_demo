//
//  ViewController.swift
//  asset
//
//  Created by 楊振東 on 2021/4/19.
//

import UIKit

class ViewController: UIViewController {
    func Doubleyourasset(A AssetWr : Int?) ->Int? {
    var Answer : Int? = nil
    guard let asset = AssetWr else {
        return Answer
    }
    print("AssetWr ! = nil")
    
        guard asset > 0 else {
            return Answer
        }
        let twotimes = Double(asset * 2)
        let anyrate = Double(arc4random()) / Double(UInt32.max)
        Answer = Int(twotimes * anyrate)
        return Answer
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        var funding : Int? = nil
        if let outcome = Doubleyourasset(A: funding) {
            print("outcome  是\(outcome)")
        }else {
            print("\(funding==nil)")
        }
        
        funding = -200000
        if let outcome = Doubleyourasset(A: funding) {
            print("outcome  是\(outcome)")
        }else {
            print("\(funding==nil)")
        }
        funding = 100000000000
        if let outcome = Doubleyourasset(A: funding) {
            print("outcome  是\(outcome)")
        }else {
            print("\(funding==nil)")
        }
        
        
    }


}

