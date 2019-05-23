@RestController
@CrossOrigin(origins = "http://localhost:4200/form")
public class BienImmoController {
 
    // standard constructors
     
    private final BienImmoRepository bienImmoRepository;
 
    @GetMapping("/bienImmos")
    public List<BienImmo> getBienImmos() {
        return (List<BienImmo>) bienImmoRepository.findAll();
    }
 
    @PostMapping("/bienImmos")
    void addBienImmo(@RequestBody BienImmo bienImmo) {
        bienImmoRepository.save(bienImmo);
    }
}