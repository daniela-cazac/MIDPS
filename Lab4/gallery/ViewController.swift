
import UIKit

class ViewController: UIViewController, UICollectionViewDelegate, UICollectionViewDataSource, UIScrollViewDelegate {

    @IBOutlet weak var collectionView: UICollectionView!
    let nasa = ["Moldova","Chisnau","Orhei","Edinet"]
    let nasaArray = [UIImage(named:"pug1"), UIImage(named:"pug2"),UIImage(named:"pug3"),UIImage(named:"pug4")]
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func collectionView(_ collectionView: UICollectionView, numberOfItemsInSection section: Int) -> Int {
        return self.nasa.count
    }
    
    func collectionView(_ collectionView: UICollectionView, cellForItemAt indexPath: IndexPath) -> UICollectionViewCell {
        let cell  = collectionView.dequeueReusableCell(withReuseIdentifier: "cell", for: indexPath) as! CollectionViewCell
        
        cell.imageView?.image = self.nasaArray[indexPath.row]
        cell.titleLabel?.text = self.nasa[indexPath.row]
        
        return cell
        
    }
    
    func collectionView(_ collectionView: UICollectionView, didSelectItemAt indexPath: IndexPath) {
        self .performSegue(withIdentifier: "ShowImage", sender: self)
        
    }
    
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        if segue.identifier == "ShowImage"
        {
            let indexPaths = self.collectionView!.indexPathsForSelectedItems!
            let indexPath = indexPaths[0] as NSIndexPath
            let vc = segue.destination as! NewViewController
            
            vc.image = self.nasaArray[indexPath.row]!
            vc.title = self.nasa[indexPath.row]
        }
    }
    

}

