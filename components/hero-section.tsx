import { Button } from "@/components/ui/button"

export function HeroSection() {
  return (
    <section className="relative min-h-[80vh] flex items-center mt-24">
      {/* Background gradient */}
      <div className="absolute inset-0 bg-gradient-to-b from-purple-900/10 via-black/5 to-blue-900/10 pointer-events-none" />
      
      <div className="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-8">
            <h1 className="text-6xl font-bold">
              <span className="text-white">Art Without</span>
              <br />
              <span className="text-gray-400">Limits</span>
            </h1>
            <p className="text-gray-400 text-lg max-w-lg">
              Say goodbye to interruptions and enjoy uninterrupted music streaming. With our ad-free platform, you'll have access to millions of songs.
            </p>
            <Button className="bg-[#D81B60] hover:bg-[#C2185B] text-white px-8 py-6 text-lg rounded-md">
              Explore
            </Button>
          </div>
          
          <div className="relative lg:h-[500px] md:h-[400px] h-[300px]">
            <div className="absolute inset-0 rounded-3xl overflow-hidden">
              <img
                src="/191.jpeg"
                alt="Hero Art"
                className="w-full h-full object-cover"
              />
              <div className="absolute inset-0 bg-black/20 " />
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
