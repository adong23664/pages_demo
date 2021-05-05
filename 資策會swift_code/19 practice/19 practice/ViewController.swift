//
//  ViewController.swift
//  19 practice
//
//  Created by 楊振東 on 2021/4/19.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        var thetotal = 0
        func add(howmany : Int, what :Int ) {
            if howmany < 1 {
                return
            }
            for _ in 1...howmany {
                add(w: what)
            }
            
        }
        func add(w what:Int) {
            thetotal += what
        }
        func add (){
            add(w:1)
        }
        add()
        print("\(thetotal)")
        add(w: 9)
        print("\(thetotal)")
        add(howmany: 3, what: 6)
        print("\(thetotal)")
    }
}

