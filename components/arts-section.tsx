import { ArtCard } from "./art-card"

export function ArtsSection() {
  return (
    <section className="relative min-h-screen py-32">
      {/* Background gradient */}
      <div className="absolute inset-0 bg-gradient-to-b from-blue-900/10 via-purple-900/5 to-black/10 pointer-events-none" />
      <div className="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl">
        <div className="text-center mb-16 space-y-4">
          <h2 className="text-5xl font-bold">
            <span className="text-white">The Hottest Arts Of All</span>
            <br />
            <span className="text-gray-400">Time</span>
          </h2>
          <p className="text-gray-400 max-w-2xl mx-auto">
            Discover our most reviewed and highly rated artworks. Each piece has been carefully curated and appreciated by our community of art enthusiasts.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ArtCard
            title="Sense"
            artist="Mark David"
            reviews={129}
            imageSrc="/9.jpeg"
          />
          <ArtCard
            title="Chainsaw Man"
            artist="Alice Blake"
            reviews={134}
            imageSrc="/25.jpeg"
          />
          <ArtCard
            title="The Trance"
            artist="Rita Mon Tila"
            reviews={42}
            imageSrc="/20.jpg"
          />
        </div>
      </div>
    </section>
  )
}
